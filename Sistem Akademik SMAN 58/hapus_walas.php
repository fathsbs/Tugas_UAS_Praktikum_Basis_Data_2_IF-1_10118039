<?php 
require 'functions.php';
$ID_Walas =$_GET["ID_Walas"];

if (hapusWalas($ID_Walas) > 0) {
 	echo "
 		<script> 
 			alert('Data berhasil dihapus');
 			document.location.href='indexWalas.php';
 		</script>
 		";
 } 
 else
 {
 	echo "
 		<script> 
 			alert('Data gagal dihapus');
 			document.location.href='indexWalas.php';
 		</script>
 		";
 }
?>