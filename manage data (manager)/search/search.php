

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Search</title>
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
          <li><a href="addadmin.php" class="active">Home</a></li>
		  <li><a href="../addadmin/addadmin.php">Add Admin</a></li>
		  <li><a href="../search/search.php">Search</a></li>
          <li><a href="../../camera/index.php">See Cameras</a></li>
          <li><a href="../../logout/logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <button onclick="myFunction()">Try it</button>
  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>


        <div class="carousel-item active" style="background-image: url(../assets/img/office3.jpg)">
          <div class="carousel-container">
            <div class="container">
				
            <!-- Form -->
            </br>
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    <select class="form-select" id="mySelect" name="search" aria-label="Default select example" style="height:45px;" onchange="myFunction()">
                      <option value="allDiv">Select an Option</option>
                      <option value="adminDiv">Search Admin</option>
                      <option value="staffDiv">Search Staff</option>
                      <option value="prisonerDiv">Search Prisoner</option>
                    </select>

                    <!-- Admin From -->
                        <div id="adminDiv" class="card" style="display: none;">
                            <h5 class="text-center mb-4">Search Admin</h5>
                            <p style="color:black">Check the checkbox to select the required field in the searching criteria </p>
                            <form method="post" action="code1.php" class="form-card" onsubmit="return Validate()">
                                <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Full Name <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="name" name="name" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "admin_name_query.php"; ?>
                                    </select>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Admin Id <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="id" name="id" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "admin_id_query.php"; ?>
                                    </select>
                                    </div>
                                </div>
                             
                                <div class="row justify-content-between text-left">
                                  <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Salary <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> <input type="text" id="from" name="from" placeholder="From" onblur="validate(1)" > </div>
                                  <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"></label></br> <input type="text" id="to" name="to" onblur="validate(1)" placeholder="To"> </div>
                                  </div>

                                <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Block <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="block" name="block" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "block_query.php"; ?>
                                    </select>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"></br> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                                </div>


                            </form>
                        </div>

                        <!-- Staff From -->

                        <div id="staffDiv" class="card" style="display: none;">
                            <h5 class="text-center mb-4">Search Staff</h5>
                            <p style="color:black">Check the checkbox to select the required field in the searching criteria </p>
                            <form method="post" action="code1.php" class="form-card" onsubmit="return Validate()">
                                <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Full Name <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="name" name="name" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "staff_name_query.php"; ?>
                                    </select>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Staff Id <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="id" name="id" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "staff_id_query.php"; ?>
                                    </select>
                                    </div>
                                </div>

                                <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Shift <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="shift" name="shift" aria-label="Default select example" style="height:45px;">
                                        <option value="day">Day</option>
                                        <option value="night">Night</option>
                                    </select>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Job <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="job" name="job" aria-label="Default select example" style="height:45px;">
                                      <option value="nurse">Nurse</option>
                                      <option value="doctor">Doctor</option>
                                      <option value="guard">Guard</option>
                                      <option value="IT">IT</option>
                                      <option value="officer">Officer</option>

                                    </select>
                                    </div>
                                </div>
                             
                                <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Salary <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> <input type="text" id="from" name="from" placeholder="From" onblur="validate(1)" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"></label></br> <input type="text" id="to" name="to" onblur="validate(1)" placeholder="To"> </div> 
                                </div>

                                <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Block <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="block" name="block" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "block_query2.php"; ?>
                                    </select>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"></br> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                                </div>

                            
                            </form>
                        </div>

                        <!-- Prisoner From -->

                        <div id="prisonerDiv" class="card" style="display: none;">
                            <h5 class="text-center mb-4">Search Admin</h5>
                            <p style="color:black">Check the checkbox to select the required field in the searching criteria </p>
                            <form method="post" action="code1.php" class="form-card" onsubmit="return Validate()">
                                <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Full Name <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="name" name="name" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "admin_name_query.php"; ?>
                                    </select>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Admin Id <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="id" name="id" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "admin_id_query.php"; ?>
                                    </select>
                                    </div>
                                </div>
                             
                                <div class="row justify-content-between text-left">
                                  <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">From Salary</label> <input type="text" id="from" name="from" onblur="validate(1)" > </div>
                                  <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">To Salary <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> <input type="text" id="to" name="to" onblur="validate(1)"> </div>
                                  </div>

                                <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Block <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin:4px 0px 0px 20px"></label> 
                                    <select class="form-select" id="block" name="block" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "block_query.php"; ?>
                                    </select>
                                    </div>
                                </div>

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label id="errorMessage" class="form-control-label px-3" ></label></div>
                                    <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                                </div>
                            </form>
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
    <script>  
        function Validate() {
        var password = document.getElementById("pwd1").value;
        var confirmPassword = document.getElementById("pwd2").value;
        if (password != confirmPassword) {
            var message = document.getElementById("errorMessage");
            message.style.color = 'red';
            message.innerHTML = "Passwords don't match";
            return false;
        }
        else{
            document.getElementById("errorMessage").innerHTML = "";
            return true;
        }
       }
       
      //  function submit(){
      //   if(Validate() == true){
      //     return true;
      //   }
      //   else{
      //     alert("Passwords don't match");
      //     return false;
      //   }
      //  }
      
</script>  

<!-- Show and Hide div -->

<script>
  function myFunction() {
    var x = document.getElementById("mySelect").value;
    var admin = document.getElementById("adminDiv");
    var staff = document.getElementById("staffDiv");
    var prisoner = document.getElementById("prisonerDiv");

    if(x == "adminDiv"){
        admin.style.display = "block";
        staff.style.display = "none";
        prisoner.style.display = "none";

    }
    else if(x == "staffDiv"){
        staff.style.display = "block";
        admin.style.display = "none";
        prisoner.style.display = "none";
    }

    else if(x == "prisonerDiv"){
        prisoner.style.display = "block";
        admin.style.display = "none";
        staff.style.display = "none";
    }
    else{
        prisoner.style.display = "none";
        admin.style.display = "none";
        staff.style.display = "none";

    } 
  }
</script>
</body>

</html>