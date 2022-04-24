<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Report</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



	
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

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
  <link href="myassets/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
		<?php require_once "code1.php"; ?>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
		  <li><a href="../manage data (admin)/index.php">Manage Data</a></li>
          <li><a href="../camera/index.php">See Cameras</a></li>
          <li><a href="../admin/index.php">See Requests</a></li>
		  <?php  require_once "code2.php"; ?>	
          <li><a href="../logout/logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php  require_once "code3.php"; ?>
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>


        <div class="carousel-item active" style="background-image: url(assets/img/office.jpg)">
          <div class="carousel-container">
            <div class="container">
				<div class="container-fluid px-1 py-5 mx-auto">
					<div class="row d-flex justify-content-center">
						<div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
							<div class="card">
								<h5 class="text-center mb-4">Daily Report</h5>
								<form method="POST" action="index.php" class="form-card" >
									<div class="row justify-content-between text-left">
										<div class="form-group">
											<label for="exampleFormControlTextarea1"><?php  $date = date("d / m / Y"); echo'In '. $date; ?></label>
											<textarea class="form-control" id="exampleFormControlTextarea1" name="report" rows="8" required></textarea>
										</div>
									</div>
									<div class="row justify-content-between text-left">
										
										<div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"><?php  echo $_SESSION['username']; ?><span class="text-danger">  </div>
									</div>
									<div class="row justify-content-end">
										<div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit the report</button> </div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
          </div>
        </div>
    </div>
	
  </section>
 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="myassets/script.js"></script>




</body>

</html>