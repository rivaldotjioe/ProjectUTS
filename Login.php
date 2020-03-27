<?php
if (isset($_GET['error']))
{
   $error=$_GET['error'];
}
else
{
   $error="";
}

$pesan = "";
if ($error=="user_salah") {
	$pesan = "Username atau Password Salah !";
	echo "<script type='text/javascript'>alert('$pesan') </script>";


} elseif ($error=="belum_login") {
	$pesan = "Anda harus login untuk mengakses fitur admin !";
	echo "<script type='text/javascript'>alert('$pesan') </script>";
} else {
	
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>

<link rel="stylesheet" type="text/css" href="theme.css">

<style type="text/css">
	
	table{
		padding-top: 200px;
	}
</style>
	<script type="text/javascript">


		
		function validasi() {
			var username = document.getElementById("user").value;
			var password = document.getElementById("pass").value;

			if (username != "" && password != "") {
				return true;
			} else {
				alert('Username dan Password harus di isi !');
				return false;
			}
		}

		function alert(a) {
			alert(a);
		}
	</script>


	
</head>
<body>

	

	<ul>
		<li><a href="Home.php">Home</a></li>
		<li><a class="active" href="login.php">Login</a></li>
	</ul>  

<form method="POST" name="login" action="validate.php" onsubmit="return validasi()">
	<center>
		
	<table class="login">
		<tr>
			<td>Username</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="" ></td>
		</tr>

		

	</table>

</center>
</form>

<?php 
function login() {
$username = $_POST['user'];
$password = md5($_POST['pass']);

$login = mysqli_query("select * from user where userid ='$username' and password = '$password'");
$result = mysqli_num_rows($login);

if($result > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/Home.php");
}else{
	alert("Username atau Password Salah");	

}

 
}

?>
</body>
</html>