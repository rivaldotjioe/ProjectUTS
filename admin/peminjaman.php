<?php
include "checkadmin.php";

if (isset($_GET['stateinsert'])) {

	$status = $_GET['stateinsert'];
	if ($status=="success") {
	echo "<script type='text/javascript'>alert('Peminjaman Sukses') </script>";
} elseif ($status=="failed") {
	echo "<script type='text/javascript'>alert('Input data gagal. Coba lagi ') </script>";
} else {
	
}
} else {
	$status = "";
}


?>


<!DOCTYPE html>


<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="theme.css">

	<style type="text/css">
	h1{
		padding-top: 100px;
	}

	tr,td{
		padding: 10px;
	}	

	</style>
</head>

<body>

<ul>
		<li><a href="Home.php">Home</a></li>
		<li><a class="active" href="peminjaman.php">Peminjaman Buku</a></li>
		<li><a href="pengembalian.php">Pengembalian Buku</a></li>
		<li><a href="logout.php">Logout</a></li>

</ul>

<center>
<h1>Peminjaman Buku </h1>


<form method="POST" action="prosespeminjaman.php">
	<table>
		<tr>
			<td>ID Buku </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>NPM</td>
			<td><input type="text" name="npm"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name=""></td>
		</tr>


	</table>

</form>	

</center>

</body>
</html>