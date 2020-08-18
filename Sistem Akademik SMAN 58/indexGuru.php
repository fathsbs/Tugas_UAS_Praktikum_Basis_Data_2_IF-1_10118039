<?php 
	require 'functions.php';

	$guru = query("SELECT * FROM guru");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Guru</title>
</head>
<center>
<body style="font-size: 21px">
<h1>Data Guru</h1>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>	
		<th>No.</th>
		<th>NIP</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Alamat</th>
		<th>Pendidikan</th>
		<th>Bidang Studi</th>
		<th>Kode Mata Pelajaran</th>
		<th>*</th>
		<th>-</th>
		<th><a href="tambah_guru.php">Tambah Data</a></th>
	</tr>	


	<?php $i=1; ?>
	<?php foreach ($guru as $row):?>
	<tr>
		<td><?= $i;?></td>
		<td><?= $row["NIP"];?></td>
		<td><?= $row["Nama_Guru"];?></td>
		<td><?= $row["Tanggal_Lahir_Guru"];?></td>
		<td><?= $row["JK_Guru"];?></td>
		<td><?= $row["Agama_Guru"];?></td>
		<td><?= $row["Alamat_Guru"];?></td>
		<td><?= $row["Pendidikan"];?></td>
		<td><?= $row["Bidang_Studi"];?></td>
		<td><?= $row["Kode_Mapel"];?></td>
		<td><a href="ubah_guru.php?NIP=<?=$row["NIP"];?>">UBAH</a></td>
		<td><a href="hapus_guru.php?NIP=<?=$row["NIP"];?>" onclick="return confirm('yakin?');">HAPUS</a></td>
		<td>-</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
<a href="utama.php">kembali ke halaman awal</a>
</center>
</body>
</html>