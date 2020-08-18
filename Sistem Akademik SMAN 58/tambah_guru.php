<?php 
	require 'functions.php';

	if (isset($_POST["simpan"])) {

		if (tambahGuru($_POST)>0) {
			echo "
				<script>
					alert('data berhasil ditambahkan');
					document.location.href = 'indexGuru.php';
				</script>
			";
		}
		else
		{
			echo "
				<script>
					
					document.location.href = 'indexGuru.php';
				</script>
			";
		}

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Guru</title>
</head>
<body style="font-size:30px;">
	<center>
		<h1>Tambah Data Guru</h1>
		<form method="post">
		<table>
			<tr>
				<th style="text-align: left"><label for="NIP" >NIP</label></th>
				<td>:</td>
				<td><input type="text" name="NIP" id="NIP" style="width: 180px; height: 30px;" required></td>
			</tr>
			
			<tr>
				<th style="text-align: left"><label for="namaGuru">Nama</label></th>
				<td>:</td>
				<td><input type="text" name="namaGuru" id="namaGuru"style="width: 180px; height: 30px;" required></td>
			</tr>
			
			<tr>	
				<th style="text-align: left"><label for="ttlGuru">Tanggal Lahir</label></th>
				<td>:</td>
				<td><input type="text" name="ttlGuru" id="ttlGuru"style="width: 180px; height: 30px;" required></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="jkGuru">Jenis Kelamin</label></th>
				<td>:</td>
				<td><input type="text" name="jkGuru" id="jkGuru"style="width: 180px; height: 30px;" required></td>
			</tr>


			<tr>	
				<th style="text-align: left"><label for="agamaGuru">Agama</label></th>
				<td>:</td>
				<td><input type="text" name="agamaGuru" id="agamaGuru"style="width: 180px; height: 30px;" required></td>
			</tr>


			<tr>	
				<th style="text-align: left"><label for="alamatGuru">Alamat</label></th>
				<td>:</td>
				<td><input type="text" name="alamatGuru" id="alamatGuru"style="width: 180px; height: 30px;" required></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="pendidikanGuru">Pendidikan</label></th>
				<td>:</td>
				<td><input type="text" name="pendidikanGuru" id="pendidikanGuru"style="width: 180px; height: 30px;" required></td>
			</tr>

			<tr>	
				<th style="text-align: left"><label for="bidstudGuru">Bidang Studi</label></th>
				<td>:</td>
				<td><input type="text" name="bidstudGuru" id="bidstudGuru"style="width: 180px; height: 30px;" required></td>
			</tr>


			<tr>	
				<th style="text-align: left"><label for="kode">Kode Mata Pelajaran</label></th>
				<td>:</td>
				<td >
					<select name="kode" id="kode" style="width: 190px; height: 38px;">
					<?php 
						$conn = mysqli_connect("localhost","root","","akademiksman58"); 
						$sql= "SELECT Kode_Mapel FROM mata_pelajaran";
						$hasil =mysqli_query($conn,$sql);
						$no=0;
						while ($data=mysqli_fetch_assoc($hasil)) {
						$no++;
						?>	
							<option value="<?php echo $data['Kode_Mapel'];?>"><?php echo $data['Kode_Mapel'];?></option>
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