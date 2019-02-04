<?php 
	include 'konek.php';
	include 'stemming.php';


	$dquery = "select * from dataset";

	//deklarasi array untuk menampung setiap data
	$frekuensi = [];
	$arr_wdt = [];
	$cos = [];
	$asc_cos = [];
	$knn = [];
	$arr_hasil = [];
	
	//aksi ketika tombol di klik	
	if(isset($_POST['ok'])){
		$data = $_POST['teks'];
		$data = str_replace(array("\r", "\n", "  "), ' ', $data); //menghilangkan enter
		$data = strtolower($data); //merubah semua kata menjadi huruf kecil

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


		//proses stemming perkata
		foreach ($arr_data as $key => $value) { 
			$stemming1 = stemming($value);
			$stemming = $stemming1;
			$arr_data[$key] = $stemming; 
			$frekuensi[$stemming] = [];
		}

		//memindah data dari array data ke dalam array frekuensi
		$jml_data = 0;
		$query = mysql_query($dquery);
		while($row = mysql_fetch_array($query)){
			$arr_lirik = explode(" ", $row['data_edit']);

			foreach ($arr_lirik as $key => $value) { $frekuensi[$value] = []; }

			$jml_data++;
		}

		$frekuensi["SUM"] = [];
		
		//memberi nilai 0 untuk setiap kata berdasarkan dokumen
		foreach ($frekuensi as $key => $value) {

			$query2 = mysql_query($dquery);
			while($res = mysql_fetch_array($query2)){ $frekuensi[$key][$res['id']] = 0; }
			
			$frekuensi[$key]["uji"] = 0;
			$frekuensi[$key]["df"] = 0;

		}

		unset($frekuensi[""]);

		//menghitung frekuensi setiap kata
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

		//menghitung idf dan total frekuensi
		foreach ($frekuensi as $key1 => $value1) {
			$jml = 0;
			$idf = 0;
			
			//menghitung total frekuensi dari setiap kata (SUM)
			foreach ($frekuensi[$key1] as $key2 => $value2) {
				// $jml += $value2;

				if($value2 != 0){ $jml++; }

				if($key1 != "SUM"){
					$frekuensi['SUM'][$key2] += $value2;
				}
			}

			//perhitungan log idf
			$idf = $jml_data/$jml;
			$idf = log($idf,10);
			$idf = number_format($idf,3);
			
			$frekuensi[$key1]["df"] = $jml;
			$frekuensi[$key1]["idf"] = $idf;

			//menghitung wdt, dan hasilnya disimpan pada array wdt
			foreach ($frekuensi[$key1] as $key3 => $value3) {
				if($key3 != 'df' && $key3 != 'idf'){
					if($value3 == 0){ $arr_wdt[$key1][$key3] = ""; }
					else{
						$wdt = $value3 * $idf;
						$arr_wdt[$key1][$key3] = number_format($wdt,3);
					}
				}
			}
		}

		unset($arr_wdt["SUM"]);

		//menghitung wdi dan kuadrat dari setiap wdt
		foreach ($arr_wdt as $key1 => $value1) {
			foreach ($arr_wdt[$key1] as $key2 => $value2) {

				$index = "wdi_". $key2; 
				$index2 = "kuadrat_".$key2;
				$kuadrat = ($value2 * $value2);
				
				if($key2 != "uji"){
					$arr_wdt[$key1][$index] = $value2 * $arr_wdt[$key1]["uji"];
				}

				$arr_wdt[$key1][$index2] = $kuadrat;
			}			
		}

		//memberi nilai 0 pada field SUM dan AKAR dan array wdt
		foreach ($arr_wdt as $key1 => $value1) {
			foreach ($arr_wdt[$key1] as $key2 => $value2) {
				$arr_wdt["SUM"][$key2] = 0;							
				$arr_wdt["AKAR"][$key2] = 0;							
			}
		}
		
		//menghitung total SUM wdt dari setiap kata
		foreach ($arr_wdt as $key1 => $value1) {
			if($key1 != "SUM"){				
				foreach ($arr_wdt[$key1] as $key2 => $value2) {
					$arr_wdt["SUM"][$key2] += $value2;							
				}
			}
		}

		//menghitung akar dari total kuadrat yang telah dihitung sebelumnya
		foreach ($arr_wdt["SUM"] as $key1 => $value1) {
			$h = sqrt($value1);
			$arr_wdt["AKAR"][$key1] = $h;
		}

		$query5 = mysql_query($dquery);

		//menghitung cosin similariti
		while($res = mysql_fetch_array($query5)){
			$index = "kuadrat_".$res['id'];
			$index2 = "wdi_".$res['id'];
			$hasil = $arr_wdt['SUM'][$index2] / ( $arr_wdt['AKAR'][$index] * $arr_wdt['AKAR']['kuadrat_uji']); //rumus

			$index2 = $res['id'];
			$cos[$index2] = $hasil;			
		}

		// echo "<pre>";
		// 	print_r($cos);
		// echo "</pre>";

		//proses sorting secara desc dan dimasukkan kedalam array asc_cos
		while(count($cos) > 0){
			$max = -9999999999999999999999999999;
			$in = -1;
			
			foreach ($cos as $key => $value) {
				if($value > $max){
					$max = $value;
					$in = $key;
				}
			}
			$asc_cos[$in] = $max;

			unset($cos[$in]);
		}


		//menentukan nilai K berdasarkan kategori
		$qkategory = mysql_query("select count(*) as total from kategori");
		$rkategori = mysql_fetch_assoc($qkategory);
		$total_kategori = $rkategori['total'];

		$mod = $total_kategori % 2; 

		$k = $total_kategori;
		
		if($mod == 1){ $k += 2; }
		else{ $k += 1; }
		
		//akhir dari menghitung nilai K

		echo "K = ".$k;

		//mengambil data teratas dari nilai K yang telah ditentukan
		$i = 0;
		foreach ($asc_cos as $key => $value) {
			if($i == $k){ break; }
			$knn[$key] = $value;
			$i++;
		}

		//menghitung hasil
		$qkategory = mysql_query("select * from kategori");
		while($rkategori = mysql_fetch_array($qkategory)){
			$arr_hasil[$rkategori['kategori']] = 0;
		}

		foreach ($knn as $key => $value) {
			$sql = "
				SELECT k.kategori 
				from dataset d
				inner join kategori k on k.id = d.kategori
				where d.id = $key
			";

			$q = mysql_query($sql);
			$r = mysql_fetch_array($q);

			$arr_hasil[$r[0]]++;

		}

		echo "<pre>";
		print_r($arr_hasil);
		echo "</pre>";

		//menghitung persentasi hasil
		foreach ($arr_hasil as $key => $value) {
			$arr_hasil[$key] = ($value / $k) * 100;
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

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>skripsi</title>
</head>
<body>

	<div class="main col-sm-12">
		<div class="col-sm-12">
			<form class="form-style" method="post">
				<label for="name">Judul</label>							
				<input type="text" name="nama" class="form-control"></input>
				<label for="name">Abstrak</label>							
				<textarea name="teks" cols="80" rows="8" id="text" class="form-control"></textarea>

				<input type="submit" class="btn btn-fullcolor" value="Input" name="ok"> &nbsp;
			</form>

			<br></br>

			<div>
			<h2 class="section-highlight" data-animation-direction="from-left" data-animation-delay="50">HASIL KLASIFIKASI TEXT DARI METODE KNN</h2>
			</div>
			<table class="table table-hover table-renponsive">
				<tbody>
					<?php
						foreach ($arr_hasil as $key => $value) {
						echo "
							<tr>
								<td>".$key."</td>
								<td>".$value."%</td>
							</tr>";
						}
					?>
				</tbody>
			</table>
			<div class="alert alert-info"><h2><?php echo "Dokumen Testing Termasuk Kategori ".$hasil; ?></h2></div>
		</div>
	</div>

	
	<div class="container">
		<div class="row">
			<div class="main col-sm-12">
				<div>
					<h2 class="section-highlight" data-animation-direction="from-left" data-animation-delay="50">PEMBOBOTAN KATA</h2>
				</div>
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
	</div>

	
	<div class="container">
		<div class="row">
			<div class="main col-sm-12">
				<div>
					<h2 class="section-highlight" data-animation-direction="from-left" data-animation-delay="50">WDT</h2>
				</div>
				<div style="overflow: auto; width: auto; height: 800px;">
					<table class="table table-hover table-renponsive">
						<thead>
							<tr>				
								<th>Daftar Kata</th>
								<?php
									foreach ($arr_wdt as $key1 => $value1) {
										foreach ($arr_wdt[$key1] as $key2 => $value2) {
											echo "<th>$key2</th>";
										}
										break;
									}
								?>
							</tr>				
						</thead>
						<tbody>
							<?php
								foreach ($arr_wdt as $key1 => $value1) {
									echo "<tr>";
									echo "<td>".$key1."</td>";
									foreach ($arr_wdt[$key1] as $key2 => $value2) {
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
	</div>
	</body>
</html>