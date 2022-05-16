<!DOCTYPE html>
<html lang="en">
<?php require_once "isLoggedin.php"; ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manager</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

	
	
	
  <style>
	input.wide{ 
				width: 20%;
				height: 40px;
				padding: 5px;
				margin-bottom: 15px;
				margin-top: 5px;
				border: 2px solid #ccc;
				font-size: 16px;
				border-radius: 5px;
			  }
  </style>

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
          <li><a href="index.php" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Select Block</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
				 <?php
						require_once "code2.php";
				  ?>
            </ul>
          </li>
          <li><a href="../camera/index.php">See Cameras</a></li>
          <li><a href="../manage data (manager)/index.php">Manage Data</a></li>
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
			<?php
				require_once "code1.php";
			?>
			  <input class="wide" type="date" name="begin" min="1997-01-01" max="2030-12-31" onchange="refresh(value);">
			</div>
          </div>
        </div>
    </div>
	
  </section><!-- End Hero -->

 

  <script>
		function refresh(today){
			window.location.replace("index.php?date=" + today);	
		}
  </script>


</body>

</html>