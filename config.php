<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db	  = "pelatihan_db";

	$connect = mysqli_connect($host, $user, $pass) or die("connection failed");
	mysqli_select_db($connect, $db) or die("database not found");
	
?>