<?php 
	require 'functions.php';

	$ID_Kelas = $_GET["ID_Kelas"];

	$kelas = query("SELECT * FROM kelas WHERE ID_Kelas = '$ID_Kelas'")[0];
	if (isset($_POST["simpan"])) {

		if ( ubahKelas($_POST)>0) {
			echo "
				<script>
					alert('data berhasil diubah');
					document.location.href = 'indexKelas.php';
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('data gagal diubah');
					document.location.href = 'indexKelas.php';
				</script>
			";
		}

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Kelas</title>
</head>
<body style="font-size:30px;">
	<center>
		<h1>Ubah Data Kelas</h1>
		<form method="post">
		<table>
			<tr>
				<th style="text-align: left"><label for="idkelas">ID Kelas</label></th>
				<td>:</td>
				<td><input type="text" name="idkelas" id="idkelas" style="width: 180px; height: 30px;" required value="<?= $kelas["ID_Kelas"];?>"></td>
			</tr>
			
			<tr>
				<th style="text-align: left"><label for="idwalas">ID Wali Kelas</label></th>
				<td>:</td>
				<td>
					<select name="idwalas" id="idwalas" style="width: 190px; height: 38px;">
						<option><?= $kelas["ID_Walas"];?></option>
					<?php 
						$conn = mysqli_connect("localhost","root","","akademiksman58"); 
						$sql= "SELECT ID_Walas FROM wali_kelas";
						$hasil =mysqli_query($conn,$sql);
						$no=0;
						while ($data=mysqli_fetch_assoc($hasil)) {
						$no++;
						?>	
							<option value="<?php echo $data['ID_Walas'];?>"><?php echo $data['ID_Walas'];?></option>
							<?php
						}

					?>
					</select>

				</td>
			</tr>
			
			<tr>	
				<th style="text-align: left"><label for="kelas">Kelas</label></th>
				<td>:</td>
				<td><input type="text" name="kelas" id="kelas"style="width: 180px; height: 30px;" required value="<?= $kelas["Kelas"];?>"></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="jurusan">Jurusan</label></th>
				<td>:</td>
				<td><input type="text" name="jurusan" id="jurusan"style="width: 180px; height: 30px;" required value="<?= $kelas["Jurusan"];?>"></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="semester">Semester</label></th>
				<td>:</td>
				<td><input type="text" name="semester" id="semester"style="width: 180px; height: 30px;" required value="<?= $kelas["Semester"];?>"></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="tahunajaran">Tahun Ajaran</label></th>
				<td>:</td>
				<td><input type="text" name="tahunajaran" id="tahunajaran"style="width: 180px; height: 30px;" required value="<?= $kelas["Tahun_Ajaran"];?>"></td>
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