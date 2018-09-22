<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<?php

	session_start();

	$username	= isset($_POST["name"])?$_POST["name"]:$_SESSION["name"];
	$password	= isset($_POST["password"])?$_POST["password"]:$_SESSION["password"];
	$nim		= isset($_POST["nomor"])?$_POST["nomor"]:$_SESSION["nomor"];
	

	$_SESSION["password"] = $password;
	if($username == "arif" || $password == "user"){
		echo "Selamat datang $username ";
		echo "<br>";
		echo "Mengakses dengan menggunakan nim $nim";
		echo "<br>";		
	}else{
		$_SESSION["Pesan"] = "Username dan password tidak cocok";
		header("location: hal2.php");
	}

?>

<br>
<a href="http://localhost/bisa2/header.php"> Next </a><br>
<a href="http://localhost/bisa2/form.html">Kembali ke Halaman Form</a>
</center>
</body>
</html>
