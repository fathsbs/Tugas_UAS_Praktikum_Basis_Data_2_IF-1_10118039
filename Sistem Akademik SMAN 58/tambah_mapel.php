<?php 
	require 'functions.php';

	if (isset($_POST["simpan"])) {

		if ( tambahMapel($_POST)>0) {
			echo "
				<script>
					alert('data berhasil ditambahkan');
					document.location.href = 'indexMapel.php';
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('data gagal ditambahkan');
					document.location.href = 'indexMapel.php';
				</script>
			";
		}

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mata Pelajaran</title>
</head>
<body style="font-size:30px;">
	<center>
		<h1>Tambah Data Mata Pelajaran</h1>
		<form method="post">
		<table>
			<tr>
				<th><label for="kodeMP">Kode Mata Pelajaran</label></th>
				<td>:</td>
				<td><input type="text" name="kodeMP" id="kodeMP" style="width: 180px; height: 30px;" required></td>
			</tr>
			
			<tr>
				<th style="text-align: left"><label for="MP">Mata Pelajaran</label></th>
				<td>:</td>
				<td><input type="text" name="MP" id="MP"style="width: 180px; height: 30px;" required></td>
			</tr>
			
			<tr>	
				<th style="text-align: left"><label for="sks">SKS</label></th>
				<td>:</td>
				<td><input type="text" name="sks" id="sks"style="width: 180px; height: 30px;" required></td>
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