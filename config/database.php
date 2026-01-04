<?php
$host     = "localhost";               
$username = "root";                     
$password = "";                     	
$database = "db_gudamo2";  	

$mysqli = mysqli_connect($host, $username, $password, $database);


if (!$mysqli) {
	die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
