<?php 
	require 'functions.php';

	$mapel = query("SELECT * FROM mata_pelajaran");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Mata Pelajaran</title>
</head>
<center>
<body style="font-size: 21px">
<h1>Data Mata Pelajaran</h1>
<br>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>	
		<th>No.</th>
		<th>Kode Mata Pelajaran</th>
		<th>Mata Pelajaran </th>
		<th>SKS</th>
		<th>*</th>
		<th>-</th>
		<th><a href="tambah_mapel.php">Tambah Data</a></th>
	</tr>	


	<?php $i=1; ?>
	<?php foreach ($mapel as $row):?>
	<tr style="text-align: center">
		<td><?= $i;?></td>
		<td><?= $row["Kode_Mapel"];?></td>
		<td><?= $row["Nama_Mapel"];?></td>
		<td><?= $row["SKS"];?></td>
		<td><a href="ubah_mapel.php?Kode_Mapel=<?=$row["Kode_Mapel"];?>">UBAH</a></td>
		<td><a href="hapus_mapel.php?Kode_Mapel=<?= $row["Kode_Mapel"];?>" onclick="return confirm('yakin?');">HAPUS</a></td>
		<td>-</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
<a href="utama.php">kembali ke halaman awal</a>
</center>
</body>
</html>