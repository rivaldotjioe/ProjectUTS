<?php
include 'koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];


$login = mysqli_query($con,"select * from user where userid ='$username' and password = '$password'");
$result = mysqli_num_rows($login);

if($result > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/Home.php");
}else{

	header("location:login.php?error=user_salah");
}

mysqli_close($con)
?>