<?php 
	require 'functions.php';

	if (isset($_POST["simpan"])) {

		if ( tambahKelas($_POST)>0) {
			echo "
				<script>
					alert('data berhasil ditambahkan');
					document.location.href = 'indexKelas.php';
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('data gagal ditambahkan');
					document.location.href = 'indexKelas.php';
				</script>
			";
		}

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Kelas</title>
</head>
<body style="font-size:30px;">
	<center>
		<h1>Tambah Data Kelas</h1>
		<form method="post">
		<table>
			<tr>
				<th style="text-align: left"><label for="idkelas">ID Kelas</label></th>
				<td>:</td>
				<td><input type="text" name="idkelas" id="idkelas" style="width: 180px; height: 30px;" required></td>
			</tr>
			
			<tr>
				<th style="text-align: left"><label for="idwalas">ID Wali Kelas</label></th>
				<td>:</td>
				<td>
					<select name="idwalas" id="idwalas" style="width: 190px; height: 38px;">
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
				<td><input type="text" name="kelas" id="kelas"style="width: 180px; height: 30px;" required></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="jurusan">Jurusan</label></th>
				<td>:</td>
				<td><input type="text" name="jurusan" id="jurusan"style="width: 180px; height: 30px;" required></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="semester">Semester</label></th>
				<td>:</td>
				<td><input type="text" name="semester" id="semester"style="width: 180px; height: 30px;" required></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="tahunajaran">Tahun Ajaran</label></th>
				<td>:</td>
				<td><input type="text" name="tahunajaran" id="tahunajaran"style="width: 180px; height: 30px;" required></td>
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