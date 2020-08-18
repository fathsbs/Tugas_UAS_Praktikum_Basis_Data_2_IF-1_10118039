<?php 
	require 'functions.php';

	$siswa = query("SELECT * FROM siswa ");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<center>
<body style="font-size: 21px">
<h1>Data Siswa</h1>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>	
		<th>No.</th>
		<th>NIS</th>
		<th>Kelas</th>
		<th>Nama </th>
		<th>Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Alamat</th>
		<th>*</th>
		<th>-</th>
		<th><a href="tambah_siswa.php">Tambah Data</a></th>
	</tr>	


	<?php $i=1; ?>
	<?php foreach ($siswa as $row):?>
	<tr>
		<td><?= $i;?></td>
		<td><?= $row["NIS"];?></td>
		<td><?= $row["ID_Kelas"];?></td>
		<td><?= $row["Nama_Siswa"];?></td>
		<td><?= $row["Tanggal_Lahir_Siswa"];?></td>
		<td><?= $row["JK_Siswa"];?></td>
		<td><?= $row["Agama_Siswa"];?></td>
		<td><?= $row["Alamat_Siswa"];?></td>
		<td><a href="ubah_siswa.php?NIS=<?=$row["NIS"];?>">UBAH</a></td>
		<td><a href="hapus_siswa.php?NIS=<?=$row["NIS"];?>" onclick="return confirm('yakin?');">HAPUS</a></td>
		<td>-</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
<a href="utama.php">kembali ke halaman awal</a>
</center>
</body>
</html>