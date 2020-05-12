<?php
//koneksi ke database

$conn = mysqli_connect("localhost","root","","phpdasar");

//ambil data dari mahasiswa/query data mahasiswa

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data(fetch) dari object result  
// mysqli_fetch_row() mengembalikan array numeric
// mysqli_fetch_assoc() mengembalikan array assosiative atau nama
// mysqli_fetch_array() mengembalikan keduanya keduanya numeric dan associative
// mysqli_fetch_object() menggunakan object
// while ($mhs = mysqli_fetch_assoc($result)){
// var_dump($mhs["nama"]);


// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>halaman admin</title>
</head>
<body>
	<h1>daftar mahasiswa</h1>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nrp</th>
			<th>Nama</th>
			<th>email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php while ($row =mysqli_fetch_assoc($result)) :?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a> | 
				<a href="">hapus</a>
			</td>
			<td><img src="img/ <?= $row["gambar"]; ?>" alt="" style="width: 50px;"></td>
			<td><?= $row=["nrp"]; ?></td>
			<td><?= $row=["nama"]; ?></td>
			<td><?= $row=["email"]; ?></td>
			<td><?= $row=["jurusan"]; ?></td>
		</tr>
		<?php endwhile; ?>
	</table>
	
</body>
</html>
