<?php 
	
	// // BUAT KONEKSI TANPA DATABASE
	// $connection = new mysqli('localhost', 'root', '');

	// BUAT KONEKSI DENGAN DATABASE
	$connection = new mysqli('localhost', 'root', '', 'sagu');

	// if(!$connection->connect_error){
	// 	echo "Koneksi BERHASIL";
	// } else {
	// 	echo "Koneksi GAGAL";
	// }

?>