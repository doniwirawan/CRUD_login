<?php 
// isi nama host/username mysql/dan password
$server = "localhost";
$user = "root";
$password = "";
$database= "login";

$koneksi = mysqli_connect($server,$root,$password,$database);
if (mysqli_connect_errno()){
    echo "koneksi database gagal " . mysqli_connect_error();
}

?>