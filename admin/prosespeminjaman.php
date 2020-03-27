<?php

include "koneksi.php";

$idbuku = $_POST['id'];

$npm = $_POST['npm'];

try {
	mysqli_query($con,"insert into peminjam values('$idbuku','$npm',0)");
	
	
	mysqli_query($con, "UPDATE `buku` SET `tersedia`= tersedia - 1 WHERE idbuku = '$idbuku';");

	header("location:peminjaman.php?stateinsert=success");


} catch (Exception $e) {
	echo "<script type='text/javascript'>alert('$e') </script>";
}


?>