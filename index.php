<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:loginpage.php?pesan=belum_login");
	}
	?>  
            <?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "logout"){
			?>
				<div class="alert alert-danger text-capitalize" role="alert">
					Anda telah berhasil logout
				</div>
			<?php
				}
			}
			?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fontawesome -->
    <link href="OwlCarousel2-2.3.4\dist\assets\owl.carousel.css">
    <link href="OwlCarousel2-2.3.4\dist\assets\owl.carousel.min.css">
    <link href="OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,500&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome\css\all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- my css styling -->
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="col-12 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 col-md-12">
                    <h1 class="display-4 text-center font-weight-bolder text-primary">Minimal.</h1>
                </div>
                <div class="col-lg-4 mt-4 mr-auto col-md-12">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0 rounded-pill" type="submit">Search</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand text-primary font-weight-bolder" href="#">Minimal.</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center xs-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center col-xs-1 text-center justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">link</a>       
                        <a class="dropdown-item" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">item</a>       
                        <a class="dropdown-item" href="#">item</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">item</a>       
                        <a class="dropdown-item" href="#">item</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        LookBook
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">item</a>       
                        <a class="dropdown-item" href="#">item</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <!-- <img src="data:image/png;base64,'.base64_encode($row['foto']).'"> -->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo 'Hello, '. $_SESSION['username']; ?>
                        <i class="fas fa-user-circle fa-1x text-primary"></i>
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="logout.php">
                           <i class="fas fa-shopping-bag mr-2 text-primary"></i> Check Out
                        </a>
 
                        <a class="dropdown-item" href="#"> 
                            <i class="fas fa-user-circle fa-1x mr-2 text-primary"></i>
                            Lihat Profile
                        </a>

                         <a class="dropdown-item" href="logout.php"> 
                            <i class="fas fa-sign-out-alt mr-2 text-primary"></i>Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/584399/living-room-couch-interior-room-584399.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="...">
            <div class="carousel-caption d-none d-md-block text-left">
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                <h5 class="display-1 font-weight-bold ">New Design 2020</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque unde ab iure architecto, distinctio voluptate. Repudiandae nesciunt optio tempora voluptates.</p>
                <button type="button btn-lg btn" class="btn btn-primary ">Primary<i class="fas fa-arrow-right ml-2"></i></button>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://images.pexels.com/photos/534151/pexels-photo-534151.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="...">
            <div class="carousel-caption d-none d-md-block text-left">
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                <h5 class="display-1 font-weight-bold ">New Design 2020</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                <button type="button btn-lg btn" class="btn btn-primary ">Primary<i class="fas fa-arrow-right ml-2"></i></button>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="...">
            <div class="carousel-caption d-none d-md-block text-left">
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                <h5 class="display-1 font-weight-bold ">New Design 2020</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                <button type="button btn-lg btn" class="btn btn-primary ">Primary<i class="fas fa-arrow-right ml-2"></i></button>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid product-section">
        <div class="container  mt-2 mt-lg-4 text-capitalize">
            <p class="h1 text-center title text-primary">Shop fashion</p>
            <p class=" text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates, sequi dolores neque voluptate quasi doloribus.</p>
            <div class="row mt-lg-4">
                <div class="col-3 mt-2  text-center">
                   <img src="img\sofa.svg" alt="" class="img-thumbnail rounded-circle p-1 text-center ">
                   <p class="h4 text-center mt-2">Sofa</p>
                </div>
                <div class="col-3 mt-2 text-center">
                   <img src="img\office-chair.svg" alt="" class="img-thumbnail rounded-circle p-1 text-center ">
                   <p class="h4 text-center mt-2">Chair</p>
                </div>
                <div class="col-3 mt-2 text-center">
                   <img src="img\desk.svg" alt="" class="img-thumbnail rounded-circle p-1 text-center  ">
                   <p class="h4 text-center mt-2">Desk</p>
                </div>
                <div class="col-3 mt-2 text-center">
                   <img src="img\chest-of-drawers.svg" alt="" class="img-thumbnail rounded-circle p-1 text-center ">
                   <p class="h4 text-center mt-2">Storage</p>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="container mt-2 mt-lg-4 text-capitalize">
            <p class="h1 text-center title text-primary">Top Great Brands</p>
            <p class=" text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates, sequi dolores neque voluptate quasi doloribus.</p>
        </div>
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="OwlCarousel2-2.3.4\src\js\owl.carousel.js"></script>
    <script src="js/jquery.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="fontawesome\js\all.js"></script>
  </body>
</html>