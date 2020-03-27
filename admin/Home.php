 
<?php 
include"checkadmin.php";
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sistem Informasi Perpustakaan </title>

<script type="text/javascript">
	
	function alert(a) {
			alert(a);
		}
</script>

<link rel="stylesheet" type="text/css" href="theme.css">
 
 <style type="text/css">
 	tr,td{
 		padding: 10px;
 	}
 </style>

 </head>
 <body>

 	<ul>
		<li><a class="active" href="Home.php">Home</a></li>
		<li><a href="peminjaman.php">Peminjaman Buku</a></li>
		<li><a href="pengembalian.php">Pengembalian Buku</a></li>
		<li><a href="logout.php">Logout</a></li>

	</ul>  


<center>

<br><br><br>	
<h1>Selamat Datang Di Sistem Informasi Perpustakaan </h1>
<br>
<h2>Daftar buku yang tersedia </h2>	

<table border="all">

	<br>
	<thead>
		<tr>
			<th>No.Buku</th>
			<th>Judul Buku</th>
			<th>Tersedia</th>

		</tr>
		

	</thead>
	
<tbody>

<?php
	
	$con = mysqli_connect("localhost","root", "", "perpus");


	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL".mysqli_connect_error();
		exit();
		} 
	$sql = "Select idbuku, Judul, tersedia from buku";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)) {
			echo '<tr>
		<td>'.$row['idbuku'].'</td>
		<td>'.$row['Judul'].'</td>
		<td>'.$row['tersedia'].'</td>
	</tr>';
		}
	} else {
		echo "0 results";
	}

	mysqli_close($con);


	


		
	?>	

</tbody>



</center>


</table>

 
 </body>
 </html>
