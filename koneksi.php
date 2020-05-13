<?php 

// isi nama host/username mysql/dan password
$koneksi = mysqli_connect("localhost","root","","login");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>