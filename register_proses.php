<?php
// menambahkan file koneksi.php
include('koneksi.php');

// menangkap data dari form
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

// query memasukkan data ke database
mysqli_query($koneksi,"INSERT INTO login values ('','$email','$username','$password','$foto')");

header("location:loginpage.php");


?>