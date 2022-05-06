

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Search Visitor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
	
    <!-- Table -->

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
	<link href="style2.css" rel="stylesheet">

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
  <style>
  body {
  /* The image used */
  background-image: url("../assets/img/office.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

  
  </style>

 

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <?php require_once "verifylogin.php"; ?>
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
          <li><a href="../../camera/index.php">See Cameras</a></li>
          <li><a href="../../admin/index.php">See Requests</a></li>
		       <?php  require_once "countrequest.php"; ?>		 
          <li><a href="../../logout/logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

				
            <!-- Table -->
			</br></br></br></br></br>
		<div class="container" style="background-color:white;">
    	<div class="row" >
            <div class="col-lg-8 col-md-10 ml-auto mr-auto" style="width:100%">
                <div class="table-responsive">
                <table class="table table-striped" style="margin:0px;">
                    <thead>
                        <tr>
                            <td class="text-center">Id</td>
                            <td>Name</td>
                            <td class="text-left">Phone Nb</td>
                            <td class="text-left">Email</td>
                            <td class="text-left">Date</td>
                            <td class="text-center">Id Of Prisoner to Visit</td>
							<td>Kinship</td>
                            <td class="text-left">Status</td>
                        </tr>
                    </thead>
                    <tbody>
                         <?php require_once "visitor_query.php"; ?>
                    </tbody>
                </table>
                </div>
           </div> 
        </div>
    </div>
			
            
			<!-- End Table -->

  
  <!-- End Hero -->

<!-- Table -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>
	$(document).ready(function() {
    $('body').bootstrapMaterialDesign();
    $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();
 
});
	</script>
    
</body>

</html>