<!DOCTYPE html>
<?php require_once "../isLoggedin.php"; ?>
<?php require_once "code1.php"; ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  
  <!-- Toast -->	
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
	  $(document).ready(function(){
		  $(".toast").toast({
		 
		  });
		  <?php require_once "code3.php"; ?>
	  });
  </script>
	
	
	
	
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
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>


        <div class="carousel-item active" style="background-image: url(../assets/img/office3.jpg)">
		<!-- Toast -->
					<div class="toast-container" style="position: absolute; top: 10%; right: 1px;">
						<div class="toast fade">
							<div class="toast-header bg-danger text-white">
								<strong class="me-auto"><i class="bi bi-exclamation-triangle"></i> Username Taken!</strong>
								<small>just now</small>
								<button type="button" class="btn-close" data-bs-dismiss="toast"></button>
							</div>
							<div class="toast-body">
								Try another username.
							</div>
						</div>    
					</div>
          <div class="carousel-container">
            <div class="container">
            <!-- Form -->
            </br>
			<?php 
				require_once "ifAdminExist.php";
				if($counter != 4){
			?>
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <div class="card">
                            <h5 class="text-center mb-4">Add Admin</h5>
                            <form method="post" action="code1.php" class="form-card" onsubmit="return validate_form()">
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" value="<?php if(isset($fname)){echo $fname;} ?>" onblur="validate(1)" required> </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Block<span class="text-danger"> *</span></label>
                                    <select class="form-select" id="email" name="block" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "code2.php"; ?>
                                    </select> 
                                    </div> 
                                </div>
                             
                                <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Salary<span class="text-danger"> *</span></label> <input type="number" name="salary" value="<?php if(isset($salary)){echo $salary;} ?>" onblur="validate(4)" required> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Username<span class="text-danger"> * </span></label> <input type="text" name="username"  onblur="validate(4)" required> </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> <input type="password" id="pwd1" name="password" placeholder="" onkeyup="check_pass_strength()"> </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Confirm Password<span class="text-danger"> *</span></label> <input type="password" id="pwd2" name="confirmPassword" placeholder="" onblur="check_pass_match()"> </div>  
                                  </div>
                               
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label id="errorMessage" class="form-control-label px-3" ></label></div>
                                    <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			<?php 
				}
				else{
					echo '<h1 class="animate__animated animate__fadeInDown" style="color:white;">Each block has an admin</h1>
					<p class="animate__animated animate__fadeInDown" style=" margin-bottom: 100px"><a href="../table/tableAdmin.php">Click here</a> if you want to delete / edit an admin</p>
					';
				}
			?>

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
    <script>  
		var is_password_strong = 0;
		var does_password_match = 0;
		function check_pass_match() {
		    var password = document.getElementById("pwd1").value;
		    var confirmPassword = document.getElementById("pwd2").value;
		    var message = document.getElementById("errorMessage");
		    if (password != confirmPassword) {
		        message.style.color = 'red';
		        message.innerHTML = "Passwords don't match";
		        does_password_match = 0;
		    } else {
		        if (confirmPassword !== "") { //matching and not empty
		            message.innerHTML = "";
		            does_password_match = 1;
		        } else {
		            message.style.color = "red";
		            message.innerHTML = "Second password is empty!";
		            does_password_match = 0;

		        }
		    }
		}

		function check_pass_strength() {
		    var p = document.getElementById("pwd1").value;
		    var m = document.getElementById("errorMessage");

		    if (p == "") {
		        m.style.color = "red";
		        m.innerHTML = "First password is empty!";
		        is_password_strong = 0;
		    } else { //First pass is not empty
		        if (p.match(/^(?=.{6})(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])/) == null) {
		            // if (p.search(/^(?=.{6})(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])/)===-1){
		            m.style.color = "red";
		            m.innerHTML = "Weak passowrd";
		            is_password_strong = 0;
		        } else {
		            m.innerHTML = "";
		            is_password_strong = 1;
		        }

		    }
		}

		function validate_form() {

		    check_pass_strength();
		    check_pass_match();

		    if (is_password_strong && does_password_match) {
		        return true;

		    } else {
		        alert("Passwords are in an incorrect form");
		        return false;
		    }
		}
      
</script>  
</body>

</html>