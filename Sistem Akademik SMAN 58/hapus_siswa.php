<?php 
require 'functions.php';
$NIS =$_GET["NIS"];

if (hapusSiswa($NIS) > 0) {
 	echo "
 		<script> 
 			alert('Data berhasil dihapus');
 			document.location.href='indexSiswa.php';
 		</script>
 		";
 } 
 else
 {
 	echo "
 		<script> 
 			alert('Data gagal dihapus');
 			document.location.href='indexSiswa.php';
 		</script>
 		";
 }
?>