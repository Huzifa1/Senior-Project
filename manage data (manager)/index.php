<!DOCTYPE html>
<html lang="en">
<?php require_once "isLoggedin2.php"; ?>
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
	
	<style>
	body, html {
  height: 100%;
}

body {
  /* The image used */
  background-image: url("assets/img/office3.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
	.flex-container {
    display: flex;
}

.flex-child {
    flex: 1;
	margin: 20px;
}  

.flex-child:first-child {
    margin-right: 20px;
} 
	</style>
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
	
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>


        <div class="carousel-item active" >
          <div class="carousel-container">
            <div class="container">
				</br></br></br></br>
				<!-- Numbers -->
					<div class="container">
						<div class="row">

						</div>
							<div class="row text-center">
								<div class="col" >
								<div class="counter">
						  <i class="bi bi-currency-dollar fa-2x"></i>
						  <h2 style="color:black;" class="timer count-title count-number" data-to="<?php echo $totalSalaries; ?>" data-speed="1500"></h2>
						   <p style="color:black;" class="count-text ">Salaries Cost (Monthly)</p>
						</div>
								</div>
								  <div class="col">
								   <div class="counter">
						  <i class="bi bi-safe fa-2x"></i>
						  <h2 style="color:black;" class="timer count-title count-number black" data-to="<?php echo $prisoners; ?>" data-speed="1500"></h2>
						  <p style="color:black;" class="count-text ">Total Number of Prisoners</p>
						</div>
								  </div>
								  <div class="col">
									  <div class="counter">
						  <i class="bi bi-briefcase fa-2x"></i>
						  <h2 style="color:black;" class="timer count-title count-number" data-to="<?php echo $staff; ?>" data-speed="1500"></h2>
						  <p style="color:black;" class="count-text ">Total Number of Staff</p>
						</div></div>
								  <div class="col">
								  <div class="counter">
						  <i class="bi bi-people fa-2x"></i>
						  <h2 style="color:black;" class="timer count-title count-number" data-to="<?php echo $visitors; ?>" data-speed="1500"></h2>
						  <p style="color:black;" class="count-text ">Number of Visitors (Daily)</p>
						</div>
								  </div>
							 </div>
					</div>
				
				<!-- End Numbers -->
					</br>
				<!-- Chart -->

					<div class="flex-container col-sm-8 col-md-12">			
						<div class="flex-child card">
							<div class="card-header">Pie chart</div>
							<div class="card-body" style="height: 420px">
								<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
									<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
										<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
									</div>
									<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
										<div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
									</div>
								</div> <canvas id="chart-line" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
							</div>
						</div>
						<div class="flex-child card">
							<div class="card-header">Bar chart</div>
							<div class="card-body" style="height: 420px">
								<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
									<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
										<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
									</div>
									<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
										<div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
									</div>
								</div> <canvas id="chart-line1" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
							</div>
						</div>
					</div>
				
				<!-- Chart -->

			</div>
          </div>
        </div>
    </div>
	

  
  <!-- End Hero -->


 <!-- Numbers -->
<script src="assets/js/myscript.js"></script>

 <!-- Pie Charts -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
				<script>
					$(document).ready(function() {
						var nbOfThief = <?php echo $nbOfThief; ?>;
						var nbOfRape = <?php echo $nbOfRape; ?>;
						var nbOfManslaughter = <?php echo $nbOfManslaughter; ?>;
						var nbOfMoneyFraud = <?php echo $nbOfMoneyFraud; ?>;
						var ctx = $("#chart-line");
						var myLineChart = new Chart(ctx, {
							type: 'pie',
							data: {
								labels: ["Thief", "Rape", "Manslaughter", "Money Fraud"],
								datasets: [{
									data: [nbOfThief, nbOfRape, nbOfManslaughter, nbOfMoneyFraud],
									backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"]
								}]
							},
							options: {
								title: {
									display: true,
									text: 'Prisoner\'s Crime'
								}
							}
						});
					});
				</script>
				
				
 <!-- Bar Charts -->

<script>
    $(document).ready(function() {
		var nbOfPriosnersA = <?php echo $nbOfPriosnersA; ?>;
		var nbOfPriosnersB = <?php echo $nbOfPriosnersB; ?>;
		var nbOfPriosnersC = <?php echo $nbOfPriosnersC; ?>;
		var nbOfPriosnersD = <?php echo $nbOfPriosnersD; ?>;
		
		var nbOfStaffA = <?php echo $nbOfStaffA; ?>;
		var nbOfStaffB = <?php echo $nbOfStaffB; ?>;
		var nbOfStaffC = <?php echo $nbOfStaffC; ?>;
		var nbOfStaffD = <?php echo $nbOfStaffD; ?>;
        var ctx = $("#chart-line1");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['A', 'B', 'C', 'D'],
                datasets: [{
                    data: [nbOfPriosnersA, nbOfPriosnersB, nbOfPriosnersC, nbOfPriosnersD],
                    label: "Prisoners",
                    borderColor: "#458af7",
                    backgroundColor:'#458af7',
                    fill: false
                }, {
                    data: [nbOfStaffA, nbOfStaffB, nbOfStaffC, nbOfStaffD],
                    label: "Staff",
                    borderColor: "#8e5ea2",
                    fill: false,
                    backgroundColor:'#8e5ea2'
                    
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Number Of Prisoners and Staff',
                },
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
				
            }
        });
		
    });
</script>
</body>

</html>