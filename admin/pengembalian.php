<?php

include "checkadmin.php";

if (isset($_GET['pengembalian'])) {

	$status = $_GET['pengembalian'];
	if ($status=="success") {
	echo "<script type='text/javascript'>alert('Pengembalian Sukses') </script>";
	} elseif ($status=="failed") {
	echo "<script type='text/javascript'>alert('Input data gagal. Coba lagi ') </script>"; 

	} else {
	
	}
	} 
else {
$status = "";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>

	<style type="text/css">
		
		tr,td{
			padding: 10px;
		}

		h1{
			padding-top: 100px;
		}
	</style>

	<link rel="stylesheet" type="text/css" href="theme.css">

</head>
<body>

<ul>
		<li><a href="Home.php">Home</a></li>
		<li><a href="peminjaman.php">Peminjaman Buku</a></li>
		<li><a class="active" href="">Pengembalian Buku</a></li>
		<li><a href="logout.php">Logout</a></li>

</ul>
<center>
<h1>Input Pengembalian Buku</h1>
<form method="POST" action="prosespengembalian.php">

	<table>

		<tr>
		<td>ID Buku</td>
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