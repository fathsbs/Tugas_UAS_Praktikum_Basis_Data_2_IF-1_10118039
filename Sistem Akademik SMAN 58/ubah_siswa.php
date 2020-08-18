<?php 
	require 'functions.php';
	$NIS = $_GET["NIS"];
	$siswa = query("SELECT * FROM siswa WHERE NIS = $NIS ")[0];
	if (isset($_POST["simpan"])) {

		if ( tambahSiswa($_POST)>0) {
			echo "
				<script>
					alert('data berhasil diubah');
					document.location.href = 'indexSiswa.php';
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('data gagal diubah');
					document.location.href = 'indexSiswa.php';
				</script>
			";
		}

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Siswa</title>
</head>
<body style="font-size:30px;">
	<center>
		<h1>Tambah Data Siswa</h1>
		<form method="post">
		<table>
			<tr>
				<th style="text-align: left"><label for="nis">NIS</label></th>
				<td>:</td>
				<td><input type="text" name="nis" id="nis" style="width: 180px; height: 30px;" required value="<?=$siswa["NIS"];?>"></td>
			</tr>
			
			<tr>
				<th style="text-align: left"><label for="kelas">Kelas</label></th>
				<td>:</td>
				<td>
					<select name="kelas" id="kelas" style="width: 190px; height: 38px;">
					<option><?=$siswa["ID_Kelas"];?></option>
					<?php 
						$conn = mysqli_connect("localhost","root","","akademiksman58"); 
						$sql= "SELECT ID_Kelas FROM kelas";
						$hasil =mysqli_query($conn,$sql);
						$no=0;
						while ($data=mysqli_fetch_assoc($hasil)) {
						$no++;
						?>	
							<option value="<?php echo $data['ID_Kelas'];?>"><?php echo $data['ID_Kelas'];?></option>
							<?php
						}

					?>
					</select>

				</td>
			</tr>
			
			<tr>	
				<th style="text-align: left"><label for="nama">Nama</label></th>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"style="width: 180px; height: 30px;" required value="<?=$siswa["Nama_Siswa"];?>"></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="ttl">Tanggal Lahir</label></th>
				<td>:</td>
				<td><input type="text" name="ttl" id="ttl"style="width: 180px; height: 30px;" required value="<?=$siswa["Tanggal_Lahir_Siswa"];?>"></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="jk">Jenis Kelamin</label></th>
				<td>:</td>
				<td><input type="text" name="jk" id="jk"style="width: 180px; height: 30px;" required value="<?=$siswa["JK_Siswa"];?>"></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="agama">Agama</label></th>
				<td>:</td>
				<td><input type="text" name="agama" id="agama"style="width: 180px; height: 30px;" required value="<?=$siswa["Agama_Siswa"];?>"></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="alamat">Alamat</label></th>
				<td>:</td>
				<td><input type="text" name="alamat" id="alamat"style="width: 180px; height: 30px;" required value="<?=$siswa["Alamat_Siswa"];?>"></td>
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