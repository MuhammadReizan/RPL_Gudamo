<?php
$host     = "localhost";               
$username = "root";                     
$password = "";                     	
$database = "db_persediaan_gudang";  	

$mysqli = mysqli_connect($host, $username, $password, $database);


if (!$mysqli) {
	die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
