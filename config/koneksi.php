<?php
$host     = 'localhost';
$username = 'root';
$password = '';
//123456789
$database = 'resto123';

$koneksi = mysqli_connect($host,$username,$password,$database);

if ($koneksi->connect_error) {
     die("Koneksi Gagal !".$koneksi->connect_error);
}
?>