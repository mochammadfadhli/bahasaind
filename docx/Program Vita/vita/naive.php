<?php 
	include 'konek.php';
	include 'stemming.php';


	$dquery = "select * from dataset";
	$data = (isset($_POST['teks'])) ? $_POST['teks'] : "";
	$frekuensi = [];
	$hasil = -1;

	if(isset($_POST['ok'])){
		$data = str_replace(array("\r", "\n", "  "), ' ', $data);
		$data = strtolower($data);

		$data = str_replace('"', "", $data);
		$data = str_replace("'", "", $data);
		$data = str_replace(str_split('~`!@#$%^&()-+[\/:*?<>|]~.'),"", $data);

		$arr_data = explode(" ", $data);
		
		foreach ($arr_data as $key => $value) {
			$query2 = mysql_query("select * from stopword");
			while($res = mysql_fetch_array($query2)){
				if($res[1] == $value){
					unset($arr_data[$key]);
					break;
				}
			}
		}


		foreach ($arr_data as $key => $value) { 
			$stemming1 = stemming($value);
			$stemming = $stemming1;
			$arr_data[$key] = $stemming; 
			$frekuensi[$stemming] = []; 
		}

		$jml_data = 0;
		$query = mysql_query($dquery);
		while($row = mysql_fetch_array($query)){
			$arr_lirik = explode(" ", $row['data_edit']);

			foreach ($arr_lirik as $key => $value) { $frekuensi[$value] = []; }

			$jml_data++;
		}

		$frekuensi["SUM"] = [];
		
		foreach ($frekuensi as $key => $value) {

			$query2 = mysql_query($dquery);
			while($res = mysql_fetch_array($query2)){ $frekuensi[$key][$res['id']] = 0; }
			
			$frekuensi[$key]["uji"] = 0;
			$frekuensi[$key]["df"] = 0;

		}

		unset($frekuensi[""]);

		foreach ($frekuensi as $key1 => $value1) {
			foreach ($arr_data as $key2 => $value2) {
				if($key1 == $value2){ $frekuensi[$key1]['uji']++; }
			}

			$query3 = mysql_query($dquery);
			while($row2 = mysql_fetch_array($query3)){
				$arr_lirik = explode(" ", $row2['data_edit']);

				foreach ($arr_lirik as $key3 => $value3) {
					if($key1 == $value3){
						$frekuensi[$key1][$row2['id']]++;
					}
				}
			}
		}

		foreach ($frekuensi as $key1 => $value1) {
			$jml = 0;
			
			//menghitung total frekuensi dari setiap kata (SUM)
			foreach ($frekuensi[$key1] as $key2 => $value2) {
				$jml += $value2;

				if($key1 != "SUM"){
					$frekuensi['SUM'][$key2] += $value2;
				}
			}
			
			$frekuensi[$key1]["df"] = $jml;
		}

		//menghitung jumlah kata yang bukan merupakan data uji
		$jmlkatanonuji = $frekuensi["SUM"]["df"] - $frekuensi["SUM"]["uji"];

		//menghitung pwc
		$arr_pwc = [];
		foreach ($frekuensi as $key1 => $value1) {
			foreach ($frekuensi[$key1] as $key2 => $value2) {
				if($key2 != 'uji' && $key2 != "SUM"){
					$index = "pwc".$key2;
					$pwc = ( $value2 + 1 ) / ( $jmlkatanonuji + $frekuensi["SUM"][$key2] ); //rumus
				}

				$arr_pwc[$key1][$key2] = number_format($pwc,3);
				$frekuensi[$key1][$index] = number_format($pwc,3);
			}
		}

		//menghitung dokumen kategori / dokumen seluruhnya
		$ckategory = [];
		$qkategory = mysql_query("select * from kategori");
		while($row = mysql_fetch_array($qkategory)){
			$id = $row['id'];
			$count = mysql_query("select count(*) as jml from dataset where kategori = $id");

			$jml = mysql_fetch_assoc($count);

			$ckategory[$row['id']] = number_format($jml['jml']/$jml_data,3);
			// echo $ckategory[$row['id']]."<br/>";
		}

		//menghitung probabilitas terbesar
		$arr_hasil = [];
		$query5 = mysql_query($dquery);
		while($res = mysql_fetch_array($query5)){
			$arr_hasil[$res['id']] = $ckategory[$res['kategori']];

			foreach ($frekuensi as $key1 => $value1) {
				if($frekuensi[$key1]["uji"] != 0 && $key1 != "SUM") {					
					$arr_hasil[$res['id']] *= $arr_pwc[$key1][$res['id']];
				}
			}				
		}

		$max = -1;
		$hasil = -1;

		//mencari nilai terbesar
		foreach ($arr_hasil as $key => $value) {
			if($value > $max) { 
				$max =  $value;
				$hasil = $key;
			}			
		}

		echo "<pre>";
		print_r($arr_hasil);		
		echo "</pre>";		

	}

	$sql = "
		SELECT k.kategori 
		from dataset d
		inner join kategori k on k.id = d.kategori
		where d.id = $hasil
	";

	$query = mysql_query($sql);
	$result = mysql_fetch_array($query); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>skripsi</title>
</head>
<body>	

<!-- BEGIN MAIN CONTENT -->
	<div class="main col-sm-12">
		<div class="col-sm-12">
			<form class="form-style" method="post">
				<label for="name">Judul</label>							
				<input name="teks" id="text" class="form-control"></input>
				<label for="name">Abstrak</label>							
				<textarea name="teks" cols="80" rows="8" id="text" class="form-control"></textarea>
				
				<input type="submit" class="btn btn-fullcolor" value="Input" name="ok"> &nbsp;			
			</form>
		<br></br>
		<div class="alert alert-info"><h2><?php echo "Dokumen Testing Termasuk Kategori ".$result[0]; ?></h2></div>

	
	<div class="row">
		<div class="main col-sm-12">
			<div><h2 class="section-highlight" data-animation-direction="from-left" data-animation-delay="50">PEMBOBOTAN KATA</h2></div>
				<div style="overflow: auto; width: auto; height: 800px;">
					<table class="table table-hover table-renponsive">
						<thead>
							<tr>
								<th>Daftar Kata</th>

							<?php
								foreach ($frekuensi as $key1 => $value1) {
									foreach ($frekuensi[$key1] as $key2 => $value2) {
										echo "<th>$key2</th>";
									}
									break;
								}
							?>
							</tr>				
						</thead>

						<tbody>
							<?php
								foreach ($frekuensi as $key1 => $value1) {
									echo "<tr>";
									echo "<td>".$key1."</td>";
									foreach ($frekuensi[$key1] as $key2 => $value2) {
										echo "<td>".$value2."</td>";
									}
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>