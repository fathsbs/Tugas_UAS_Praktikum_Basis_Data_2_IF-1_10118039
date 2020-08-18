<?php 
	require 'functions.php';

	if (isset($_POST["simpan"])) {

		if ( tambahWalas($_POST)>0) {
			echo "
				<script>
					alert('data berhasil ditambahkan');
					document.location.href = 'indexWalas.php';
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('data gagal ditambahkan');
					document.location.href = 'indexWalas.php';
				</script>
			";
		}

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Wali Kelas</title>
</head>
<body style="font-size:30px;">
	<center>
		<h1>Tambah Data Wali Kelas</h1>
		<form method="post">
		<table>
			<tr>
				<th><label for="idwalas">ID Wali Kelas</label></th>
				<td>:</td>
				<td><input type="text" name="idwalas" id="idwalas" style="width: 180px; height: 30px;" required></td>
			</tr>
			
			<tr>
				<th style="text-align: left"><label for="nip">NIP</label></th>
				<td>:</td>
				<td>
					<select name="nip" id="nip" style="width: 190px; height: 38px;">
					<?php 
						$conn = mysqli_connect("localhost","root","","akademiksman58"); 
						$sql= "SELECT NIP FROM guru";
						$hasil =mysqli_query($conn,$sql);
						$no=0;
						while ($data=mysqli_fetch_assoc($hasil)) {
						$no++;
						?>	
							<option value="<?php echo $data['NIP'];?>"><?php echo $data['NIP'];?></option>
							<?php
						}

					?>
					</select>

				</td>
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