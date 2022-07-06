<?php 

	// INTEGRASI KONEKSI
	require_once('connection.php');

	// FUNGSI BUAT DATABASE
	$sql = "CREATE DATABASE kab_jayapura";
	$connection->query($sql);

?>