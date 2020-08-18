<?php 
require 'functions.php';
$ID_Kelas =$_GET["ID_Kelas"];

if (hapusKelas($ID_Kelas) > 0) {
 	echo "
 		<script> 
 			alert('Data berhasil dihapus');
 			document.location.href='indexKelas.php';
 		</script>
 		";
 } 
 else
 {
 	echo "
 		<script> 
 			alert('Data gagal dihapus');
 			document.location.href='indexKelas.php';
 		</script>
 		";
 }
?>