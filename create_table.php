<?php 
	
	// INTEGRASI KONEKSI
	require_once('connection.php');

	// FUNGSI CREATE TABLE
	$sql = "CREATE TABLE students(
				id INT(11) AUTO_INCREMENT PRIMARY KEY,
				first_name VARCHAR(30) NOT NULL,
				last_name VARCHAR(30) NULL,
				email VARCHAR(50) NULL
			)";
			
	$connection->query($sql);

?>