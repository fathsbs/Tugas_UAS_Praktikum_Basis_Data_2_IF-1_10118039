<?php 
$conn = mysqli_connect("localhost","root","","akademiksman58");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]= $row;
	}
	return $rows;
	}

//Logika Tabel Mata Pelajaran	
function tambahMapel($data){
	global $conn;

	$kodeMP = htmlspecialchars($data["kodeMP"]);	
	$MP = htmlspecialchars($data["MP"]);	
	$sks = htmlspecialchars($data["sks"]);

	$query = "INSERT INTO mata_pelajaran 
					VALUES
					('$kodeMP','$MP',$sks)
					";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubahMapel($data){
	global $conn;

	$kodeMP = htmlspecialchars($data["kodeMP"]);	
	$MP = htmlspecialchars($data["MP"]);	
	$sks = htmlspecialchars($data["sks"]);

	$query = "UPDATE mata_pelajaran 
					SET
					Kode_Mapel='$kodeMP',
					Nama_Mapel='$MP',
					SKS=$sks
					WHERE Kode_Mapel='$kodeMP'
					";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function hapusMapel($Kode_Mapel){
	global $conn;
	mysqli_query($conn, "DELETE FROM mata_pelajaran WHERE Kode_Mapel=$Kode_Mapel");
	return mysqli_affected_rows($conn);
}

//Logika Tabel Guru
function tambahGuru($data){
	global $conn;

	$NIP = htmlspecialchars($data["NIP"]);
	$namaGuru = htmlspecialchars($data["namaGuru"]);
	$ttlGuru = htmlspecialchars($data["ttlGuru"]);
	$jkGuru = htmlspecialchars($data["jkGuru"]);
	$agamaGuru = htmlspecialchars($data["agamaGuru"]);
	$alamatGuru = htmlspecialchars($data["alamatGuru"]);
	$pendidikanGuru = htmlspecialchars($data["pendidikanGuru"]);
	$bidstudGuru = htmlspecialchars($data["bidstudGuru"]);
	$kode = htmlspecialchars($data["kode"]);

	$query = "INSERT INTO guru 
				VALUES
				($NIP,'$namaGuru','$ttlGuru','$jkGuru','$agamaGuru','$alamatGuru','$pendidikanGuru','$bidstudGuru','$kode')
				";

	mysqli_query($conn, $query);
}

function ubahGuru($data){
	global $conn;

	$nip = htmlspecialchars($data["nip"]);
	$namaGuru = htmlspecialchars($data["namaGuru"]);
	$ttlGuru = htmlspecialchars($data["ttlGuru"]);
	$jkGuru = htmlspecialchars($data["jkGuru"]);
	$agamaGuru = htmlspecialchars($data["agamaGuru"]);
	$alamatGuru = htmlspecialchars($data["alamatGuru"]);
	$pendidikanGuru = htmlspecialchars($data["pendidikanGuru"]);
	$bidstudGuru = htmlspecialchars($data["bidstudGuru"]);
	$kode = htmlspecialchars($data["kode"]);

	$query = " UPDATE guru 
				SET
				NIP = $nip,
				Nama_Guru='$namaGuru',
				Tanggal_Lahir_Guru='$ttlGuru',
				JK_Guru='$jkGuru',
				Agama_Guru='$agamaGuru',
				Alamat_Guru='$alamatGuru',
				Pendidikan = '$pendidikanGuru',
				Bidang_Studi='$bidstudGuru',
				Kode_Mapel='$kode'
				WHERE NIP = $nip
				";

	mysqli_query($conn, $query);
}	

function hapusGuru($NIP){
	global $conn;
	mysqli_query($conn, "DELETE FROM guru WHERE NIP=$NIP");
	return mysqli_affected_rows($conn);
}

function tambahKelas($data){
	global $conn;

	$idkelas = htmlspecialchars($data["idkelas"]);	
	$idwalas = htmlspecialchars($data["idwalas"]);	
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$semester = htmlspecialchars($data["semester"]);
	$tahunajaran = htmlspecialchars($data["tahunajaran"]);

	$query = "INSERT INTO kelas 
					VALUES
					('$idkelas',$idwalas,'$kelas','$jurusan',$semester,'$tahunajaran')
					";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
	var_dump($query);
	var_dump($conn);
}

function ubahKelas($data){
	global $conn;

	$idkelas = htmlspecialchars($data["idkelas"]);	
	$idwalas = htmlspecialchars($data["idwalas"]);	
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$semester = htmlspecialchars($data["semester"]);
	$tahunajaran = htmlspecialchars($data["tahunajaran"]);

	$query = "UPDATE kelas 
					SET
					ID_Kelas='$idkelas',
					ID_Walas= $idwalas,
					Kelas=$kelas,
					Jurusan='$jurusan',
					Semester=$semester,
					Tahun_Ajaran='$tahunajaran'
					WHERE ID_Kelas='$idkelas'
					";

	mysqli_query($conn, $query);

}

function hapusKelas($ID_Kelas){
	global $conn;
	mysqli_query($conn, "DELETE FROM kelas WHERE ID_Kelas=$ID_Kelas");
	return mysqli_affected_rows($conn);
}

function tambahWalas($data){
	global $conn;

	$idwalas = htmlspecialchars($data["idwalas"]);	
	$nip = htmlspecialchars($data["nip"]);	


	$query = "INSERT INTO wali_kelas 
					VALUES
					($idwalas,$nip)
					";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubahWalas($data){
	global $conn;

	$idwalas = htmlspecialchars($data["idwalas"]);	
	$nip = htmlspecialchars($data["nip"]);	


	$query = " UPDATE wali_kelas 
					SET
					ID_Walas = $idwalas,
					NIP = $nip
					WHERE ID_Walas = $idwalas
					";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapusWalas($ID_Walas){
	global $conn;
	mysqli_query($conn, "DELETE FROM wali_kelas WHERE ID_Walas=$ID_Walas");
	return mysqli_affected_rows($conn);
}

function tambahSiswa($data){
	global $conn;

	$nis = htmlspecialchars($data["nis"]);	
	$kelas = htmlspecialchars($data["kelas"]);	
	$nama = htmlspecialchars($data["nama"]);
	$ttl = htmlspecialchars($data["ttl"]);
	$jk = htmlspecialchars($data["jk"]);
	$agama = htmlspecialchars($data["agama"]);
	$alamat = htmlspecialchars($data["alamat"]);

	$query = "INSERT INTO siswa VALUES($nis,'$kelas','$nama ','$ttl ','$jk agama','$alamat ')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubahSiswa($data){
	global $conn;

	$nis = htmlspecialchars($data["nis"]);	
	$kelas = htmlspecialchars($data["kelas"]);	
	$nama = htmlspecialchars($data["nama"]);
	$ttl = htmlspecialchars($data["ttl"]);
	$jk = htmlspecialchars($data["jk"]);
	$agama = htmlspecialchars($data["agama"]);
	$alamat = htmlspecialchars($data["alamat"]);

	$query = "UPDATE siswa SET
				NIS = $nis,
				ID_Kelas ='$kelas',
				Nama_Siswa='$nama',
				Tanggal_Lahir_Siswa'$ttl',
				JK_Siswa='$jk',
				Agama_Siswa='$agama'
				Alamat_Siswa='$alamat '
				WHERE NIS = $nis
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapusSiswa($NIS){
	global $conn;
	mysqli_query($conn, "DELETE FROM siswa WHERE NIS=$NIS");
	return mysqli_affected_rows($conn);
}
?>