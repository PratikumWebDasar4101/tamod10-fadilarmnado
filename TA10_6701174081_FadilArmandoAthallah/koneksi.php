<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "jurnal8";

	$conn = new mysqli($server,$user,$pass,$db);

	if ($conn->connect_error) {
		die("connect gagal" . $conn->connect_error);
	}	
?>
