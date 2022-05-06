

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pick Block</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
	
     <!-- From -->
		
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../myassets/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <style> .center {
            margin: auto;
            width: 60%;
            padding: 10px;
          }
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <?php  require_once "code3.php"; ?>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php" class="active">Main Page</a></li>
		      <li class="dropdown"><a href="#"><span>Select Action</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="../../report/index.php">Write a Report</a></li>
            <li><a href="../index.php">Main Page</a></li>
			<li><a href="../addprisoner/whichblock.php">Add Prisoner</a></li>
            <li><a href="../addstaff/addstaff.php">Add Staff</a></li>
            <li><a href="../search/search.php">Search</a></li>
            </ul>
          </li>
          <li><a href="s../../camera/index.php">See Cameras</a></li>
          <li><a href="../../admin/index.php">See Requests</a></li>
		       <?php  require_once "code4.php"; ?>		 
          <li><a href="../../logout/logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>


        <div class="carousel-item active" style="background-image: url(../assets/img/office.jpg)">
          <div class="carousel-container">
            <div class="container">
            <?php require_once "code2.php"; ?>
            <!-- Form -->
            </br>
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <div class="card">
                            <h5 class="text-center mb-4">Edit Prisoner</h5>
                            <h6 class="text-center mb-4">In which block do you want to move the prisoner?</h6>
                            <form method="get" action="editprisoner.php" class="form-card" onsubmit="return Validate()">
                                <div class="center">
                                    <select class="form-select" id="block" name="block" aria-label="Default select example" style="text-align:center;height:45px;" >
                                          <?php require_once "code6.php"; ?>
                                    </select> </br>
                                    <input id="" name="id" type="hidden" value="<?php  echo $id; ?>">
                                    <div class="center form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Next</button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


			<!-- End From -->

			</div>
          </div>
        </div>
    </div>
	
  </section>
  
  <!-- End Hero -->

<!-- Form -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../myassets/script.js"></script>
    

    
</body>

</html>