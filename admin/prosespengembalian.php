<?php

include "koneksi.php";

$idbuku = $_POST['id'];
$npm = $_POST['npm'];

try {

	mysqli_query($con,"UPDATE `peminjam` SET `dikembalikan`= 1 WHERE idbukufk = '$idbuku' AND npm = '$npm';");
	mysqli_query($con, "UPDATE `buku` SET `tersedia` = tersedia+1 WHERE idbuku = '$idbuku';");
	header("location:pengembalian.php?pengembalian=success");

	
} catch (Exception $e) {

	echo "$e";
}

mysqli_close($con)

?>