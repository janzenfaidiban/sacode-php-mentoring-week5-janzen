# sacode-php-mentoring-week5-janzen
Learn MySQL in PHP


## CREATE DATABASE

	CREATE DATABASE database_name

## DROP (DELETE) DATABASE
	
	DROP DATABASE database_name

## CREATE TABLE

	CREATE TABLE table_name (
		id INT(11) AUTO_INCREMENT PRIMARY KEY,
	    first_name VARCHAR(30) NOT NULL,
	    last_name VARCHAR(30) NULL
	)

## DROP (DELETE) TABLE

	DROP TABLE table_name


## CREATE CONNECTION

	<?php 
	
		// // BUAT KONEKSI TANPA DATABASE
		// $connection = new mysqli('localhost', 'root', '');

		// BUAT KONEKSI DENGAN DATABASE
		$connection = new mysqli('localhost', 'root', '', 'sagu');

		if(!$connection->connect_error){
			echo "Koneksi BERHASIL";
		} else {
			echo "Koneksi GAGAL";
		}

	?>