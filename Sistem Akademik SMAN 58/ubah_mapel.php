<?php 
	require 'functions.php';

	$Kode_Mapel = $_GET["Kode_Mapel"];

	$mapel = query("SELECT * FROM mata_pelajaran WHERE Kode_Mapel = '$Kode_Mapel'")[0];

	if (isset($_POST["simpan"])) {

		if ( ubahMapel($_POST)>0) {
			echo "
				<script>
					alert('data berhasil diubah');
					document.location.href = 'indexMapel.php';
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('data gagal diubah');
					document.location.href = 'indexMapel.php';
				</script>
			";
		}

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mata Pelajaran</title>
</head>
<body style="font-size:30px;">
	<center>
		<h1>Ubah Data Mata Pelajaran</h1>
		<form method="post">
		<table>
			<tr>
				<th><label for="kodeMP">Kode Mata Pelajaran</label></th>
				<td>:</td>
				<td><input type="text" name="kodeMP" id="kodeMP" style="width: 180px; height: 30px;" required value="<?=$mapel["Kode_Mapel"];?>"></td>
			</tr>
			
			<tr>
				<th style="text-align: left"><label for="MP">Mata Pelajaran</label></th>
				<td>:</td>
				<td><input type="text" name="MP" id="MP"style="width: 180px; height: 30px;" required value="<?=$mapel["Nama_Mapel"];?>"></td>
			</tr>
			
			<tr>	
				<th style="text-align: left"><label for="sks">SKS</label></th>
				<td>:</td>
				<td><input type="text" name="sks" id="sks"style="width: 180px; height: 30px;" required value="<?=$mapel["SKS"];?>"></td>
			</tr>
			
			<tr>
				<th></th>
				<td></td>
				<td><button type="submit" name="simpan" style="width: 188px; height: 30px;">SIMPAN</button></td>
			</tr>
			</form>
		</table>
	</center>
</body>
</html>