<?php
// menambahkan file koneksi.php
include('koneksi.php');

// menangkap data dari form
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$foto = $_POST['foto'];

// query memasukkan data ke database
mysqli_query($koneksi,"INSERT INTO tb_mahasiswa values ('','','','','$foto','','','','','$email','$username','$password','')");

header("location:loginpage.php");


?>