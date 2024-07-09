<?php
//ini untuk nama server
$host     = 'localhost';
//ini untuk usernamenya
$username = 'root';
//ini untuk passwordnya
$password = '';
$database = 'resto123';

$koneksi = mysqli_connect($host,$username,$password,$database);

if ($koneksi->connect_error) {
     die("Koneksi Gagal !".$koneksi->connect_error);
}
?>