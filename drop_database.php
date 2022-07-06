<?php 

	// INTEGRASI KONEKSI
	require_once('connection.php');

	// FUNGSI DROP DATABASE
	$sql = "DROP DATABASE kab_jayapura";

	$connection->query($sql);

?>