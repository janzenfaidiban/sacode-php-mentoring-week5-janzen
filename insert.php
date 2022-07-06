<?php 

	// INTEGRASI KONEKSI
	require_once('connection.php');

	// FUNGSI SQL INSERT DATA
	$sql = "INSERT INTO tutors(first_name, last_name) VALUES ('Janzen','Faidiban')";

	// FUNGSI MENGIRIM DATA KE DATABASE
	$connection->query($sql);

?>