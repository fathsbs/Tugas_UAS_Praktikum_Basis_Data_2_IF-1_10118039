<?php 
	require 'functions.php';

	$kelas = query("SELECT * FROM kelas");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Kelas</title>
</head>
<center>
<body style="font-size: 21px">
<h1>Data Kelas</h1>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>	
		<th>No.</th>
		<th>ID Kelas</th>
		<th>ID Walas</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>Semester</th>
		<th>Tahun Ajaran</th>
		<th>*</th>
		<th>-</th>
		<th><a href="tambah_kelas.php">Tambah Data</a></th>
	</tr>	


	<?php $i=1; ?>
	<?php foreach ($kelas as $row):?>
	<tr>
		<td><?= $i;?></td>
		<td><?= $row["ID_Kelas"];?></td>
		<td><?= $row["ID_Walas"];?></td>
		<td><?= $row["Kelas"];?></td>
		<td><?= $row["Jurusan"];?></td>
		<td><?= $row["Semester"];?></td>
		<td><?= $row["Tahun_Ajaran"];?></td>
		<td><a href="ubah_kelas.php?ID_Kelas=<?= $row["ID_Kelas"];?>">UBAH</a></td>
		<td><a href="hapus_kelas.php?ID_Kelas=<?= $row["ID_Kelas"];?>" onclick="return confrim('yakin?');">HAPUS</a></td>
		<td>-</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
<a href="utama.php">kembali ke halaman awal</a>
</center>
</body>
</html>