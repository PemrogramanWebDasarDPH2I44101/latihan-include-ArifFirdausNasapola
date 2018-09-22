<?php 
	session_start();
	
	$password = $_SESSION["password"];

	if($password == "admin" )
		echo "Halaman tidak boleh diakses";
	
	else
		echo "";

?>