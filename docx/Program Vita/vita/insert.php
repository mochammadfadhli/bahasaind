<?php  
	include 'konek.php';
	include 'stemming.php';

	$awal = microtime(true);

	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$kategori = $_POST['kategori'];
		$teks = $_POST['teks'];

		$teks = trim(preg_replace('/\s+/', ' ', $_POST['teks']));
		$data = strtolower($teks);
		$teks = str_replace('"', "", $teks);
		$teks = str_replace("'", "", $teks);
		$data = str_replace(str_split('~`!@#$%^&()-+[\/:*?<>|]~.'),"", $teks);

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

		// $arr_data = array_unique($arr_data);

		$data = "";

		foreach ($arr_data as $key => $value) {
			$stemming = stemming($value);
			$data .= $stemming." ";
		}
		
		$query = "INSERT INTO dataset VALUES('','$nama','$teks','$data','$kategori')";
		$insert_query = mysql_query($query);
		if ($insert_query) {
              echo "<script type='text/javascript'> alert('DATA SAVED');</script>";
            } else{
              echo "<script type='text/javascript'> alert('DATA UNSAVED');</script>";
        }  
	}

	$akhir= microtime(true);
	$totalwaktu= $akhir - $awal;
	echo "Halaman ini di eksekusi dalam waktu ". number_format($totalwaktu, 3, '.', ''). " detik";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="main col-sm-12">
		<div class="col-sm-12">
			<form class="form-style" method="post">
				<label for="name">Judul</label>							
				<input type="text" name="nama" class="form-control"></input>
				<label for="name">Abstrak</label>							
				<textarea name="teks" cols="80" rows="8" id="" class="form-control"></textarea>
				<label for="kategori">Kategori</label>							
				<select name="kategori">
					<?php 
						$q=mysql_query('select * from kategori');
							while ($r=mysql_fetch_array($q)) {
							echo "<option value='".$r['id']."'>".$r['kategori']."</option>";
						}
					 ?>
				</select>
				<br></br>
				<input class="btn btn-fullcolor" type="submit" value="ok" name="submit"> &nbsp;		
			</form>
		</div>
	</div>	
</div>
</body>
</html>
