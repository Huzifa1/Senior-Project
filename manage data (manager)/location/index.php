<!DOCTYPE html>
<html lang="en">
<?php require_once "../isLoggedin.php"; ?>
<?php require_once "code1.php"; ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>See Location</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <style>
  body, html {
  height: 100%;
}

body {
  /* The image used */
  background-image: url("../assets/img/office3.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  
  	.float-container {
    padding: 20px;
}

.float-child {
	background-color: white;
    padding: 20px;
}
th, td {
  padding: 0px 20px 15px 0px;
} 
  </style>
	
	


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

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  
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
          <li><a href="../../manager/index.php" class="active">Home</a></li>
		  <li><a href="../index.php">Main Page</a></li>
		  <li><a href="../search/search.php">Search</a></li>
          <li><a href="../../camera/index.php">See Cameras</a></li>
          <li><a href="../../logout/logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  </br></br></br>
  
  <div class="m-4">
    <div class="accordion" id="myAccordion" style="width:100%">
		<div class="float-container">
			<div  class="float-child" style="margin:70px 0px 0px 23px; float: left;">
				<div class="card-body">
						<h3> Prisoner's Information: </h3></br>
						<table>
							<tr><th> Id: </th><td><?php echo $row['prisoner_id'];?></td></tr>
							<tr><th> Name: </th><td><?php echo $row['priosner_name'];?></td></tr>
							<tr><th> Age: </th><td><?php echo $row['age'];?></td></tr>
							<tr><th> Block: </th><td><?php echo $row['block'];?></td></tr>
						</table>
				</div>
			</div>
			<div id="map" class="float-child" style="float: right; height: 450px; width: 60%;">
				
			</div>
        </div>
    </div>
</div>

 
<!-- Map -->
	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2ubM4jIn_6jFy_W8roRxCYCEcwhl4fNc&callback=initMap&v=weekly"
      defer
    ></script>
	
	<script>
		// Initialize and add the map
		function initMap() {
		  // The location of Uluru
		  const uluru = { lat: <?php echo $row['latitude'];  ?>, lng: <?php echo $row['longitude'];  ?> };
		  // The map, centered at Uluru
		  const map = new google.maps.Map(document.getElementById("map"), {
			zoom: 12,
			center: uluru,
		  });
		  // The marker, positioned at Uluru
		  const marker = new google.maps.Marker({
			position: uluru,
			map: map,
		  });
		}

		window.initMap = initMap;

	</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>