<?php 
	require 'functions.php';

	$walas = query("SELECT * FROM wali_kelas");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Wali Kelas</title>
</head>
<center>
<body style="font-size: 21px">
<h1>Data Wali Kelas</h1>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>	
		<th>No.</th>
		<th>ID Wali Kelas</th>
		<th>NIP</th>
		<th>*</th>
		<th>-</th>
		<th><a href="tambah_walas.php">Tambah Data</a></th>
	</tr>	


	<?php $i=1; ?>
	<?php foreach ($walas as $row):?>
	<tr>
		<td><?= $i;?></td>
		<td><?= $row["ID_Walas"];?></td>
		<td><?= $row["NIP"];?></td>
		<td><a href="ubah_walas.php?ID_Walas=<?=$row["ID_Walas"];?>">UBAH</a></td>
		<td><a href="hapus_walas.php?ID_Walas=<?=$row["ID_Walas"];?>" onclick="return confirm('yakin?');">HAPUS</a></td>
		<td>-</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
<a href="utama.php">kembali ke halaman awal</a>
</center>
</body>
</html>