<?php 
require 'functions.php';
$Kode_Mapel =$_GET["Kode_Mapel"];

if (hapusMapel($Kode_Mapel) > 0) {
 	echo "
 		<script> 
 			alert('Data berhasil dihapus');
 			document.location.href='indexMapel.php';
 		</script>
 		";
 } 
 else
 {
 	echo "
 		<script> 
 			alert('Data gagal dihapus');
 			document.location.href='indexMapel.php';
 		</script>
 		";
 }
?>