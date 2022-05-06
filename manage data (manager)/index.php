<!DOCTYPE html>
<html lang="en">
<?php require_once "code1.php"; ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manager Manage Data</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
	

	<!-- Numbers -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link href="assets/css/mystyle.css" rel="stylesheet">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Prison</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../manager/index.php" class="active">Home</a></li>
		  <li><a href="addadmin/addadmin.php">Add Admin</a></li>
		  <li><a href="search/search.php">Search</a></li>
          <li><a href="../camera/index.php">See Cameras</a></li>
          <li><a href="../logout/logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>


        <div class="carousel-item active" style="background-image: url(assets/img/office3.jpg)">
          <div class="carousel-container">
            <div class="container">
				
				<!-- Numbers -->
					<div class="container">
						<div class="row">

						</div>
							<div class="row text-center">
								<div class="col">
								<div class="counter">
						  <i class="bi bi-building fa-2x"></i>
						  <h2 style="color:black;" class="timer count-title count-number" data-to="<?php echo $blocks; ?>" data-speed="1500"></h2>
						   <p style="color:black;" class="count-text ">Blocks</p>
						</div>
								</div>
								  <div class="col">
								   <div class="counter">
						  <i class="bi bi-safe fa-2x"></i>
						  <h2 style="color:black;" class="timer count-title count-number black" data-to="<?php echo $prisoners; ?>" data-speed="1500"></h2>
						  <p style="color:black;" class="count-text ">Prisoners</p>
						</div>
								  </div>
								  <div class="col">
									  <div class="counter">
						  <i class="bi bi-briefcase fa-2x"></i>
						  <h2 style="color:black;" class="timer count-title count-number" data-to="<?php echo $staff; ?>" data-speed="1500"></h2>
						  <p style="color:black;" class="count-text ">Staff</p>
						</div></div>
								  <div class="col">
								  <div class="counter">
						  <i class="bi bi-people fa-2x"></i>
						  <h2 style="color:black;" class="timer count-title count-number" data-to="<?php echo $visitors; ?>" data-speed="1500"></h2>
						  <p style="color:black;" class="count-text ">Visitors (Daily)</p>
						</div>
								  </div>
							 </div>
					</div>
				
				<!-- End Numbers -->
			</div>
          </div>
        </div>
    </div>
	
  </section>
  
  <!-- End Hero -->


 <!-- Numbers -->
<script src="assets/js/myscript.js"></script>



</body>

</html>