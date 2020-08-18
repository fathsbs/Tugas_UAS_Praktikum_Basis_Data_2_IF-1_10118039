<?php 
require 'functions.php';
$NIP =$_GET["NIP"];

if (hapusGuru($NIP) > 0) {
 	echo "
 		<script> 
 			alert('Data berhasil dihapus');
 			document.location.href='indexGuru.php';
 		</script>
 		";
 } 
 else
 {
 	echo "
 		<script> 
 			alert('Data gagal dihapus');
 			document.location.href='indexGuru.php';
 		</script>
 		";
 }
?>