<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>index untuk login</title>
  </head>
  <body>
    <div class="container xs-auto">
	<div class="row d-flex justify-content-center mt-lg-5">
		<div class="col-lg-4 col-xs-12 xs-auto justify-content-center p-xs-5 pt-xs-5 mt-lg-5 border p-4 bg-light rounded">
		<h1 class="text-center">LOGIN FORM</h1>
			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
			?>
				<div class="alert alert-danger text-capitalize" role="alert">
					login gagal, username dan password salah
				</div>
			<?php
				}else if($_GET['pesan'] == "belum_login"){

			?>
				<div class="alert alert-danger  text-capitalize" role="alert">
					anda harus login untuk mengakses halaman
				</div>
					
			<?php
				}
			}
			?>
				<form action="cek_login.php" method="post" autocomplete="off">
					<div class="form-group">
						<label for="exampleInputusername1">Username</label>
						<input type="username" class="form-control" id="exampleInputusername1" aria-describedby="usernameHelp" name="username" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="off">
					</div>
					<!-- <div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div> -->
					<button type="submit" class="btn btn-primary">Log in</button>
				</form>
		</div>
	</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>