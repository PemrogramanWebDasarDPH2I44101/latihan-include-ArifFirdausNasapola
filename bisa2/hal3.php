<?php 
	session_start();
	$akses = $_SESSION["nim"];
	if($akses == "admin")
		header("Location: form.html") ;
	else
		header("Halaman tidak boleh diakses");
?>