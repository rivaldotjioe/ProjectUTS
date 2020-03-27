<?php
session_start();
if ($_SESSION['status']!="login") {

	header("location:../login.php?error=belum_login");
	
}

?>