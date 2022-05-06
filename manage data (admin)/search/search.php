

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Search</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
	
     <!-- From -->
		

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


     


    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main2.css" rel="stylesheet" media="all">
    
    <style> 
        body, html {
          height: 100%;
        }

        .bg {
          /* The image used */
          background-image: url("../assets/img/office.jpg");

          /* Full height */
          height: 100%;

          /* Center and scale the image nicely */
          background-position: top;
          background-repeat: repeat-y;
          background-size: cover;
        }
		.badge {
        position: relative;
        top: -16px;
        left: -14px;
		}
		.p-t-165 {
		  padding-top: 100px;
		}

		@media (max-width: 767px) {
		  .p-t-165 {
			padding-top: 80px;
		  }
		}

		.p-b-100 {
		  padding-bottom: 80px;
		}

		@media (max-width: 767px) {
		  .p-b-100 {
			padding-bottom: 200px;
		  }
		}
		
		.page-wrapper {
		  min-height: 100vh;
		}
		
		.tab-list__link {
		  display: block;
		  text-transform: uppercase;
		  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
		  font-weight: 500;
		  font-size: 19px;
		  color: rgba(85, 85, 85, 0.6);
		  padding: 0 20px;
		}

    </style>
</head>

<body class="bg">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <?php require_once "verifylogin.php"; ?>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../../admin/index.php" class="active">Home</a></li>
		      <li class="dropdown"><a href="#"><span>Select Action</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="../../report/index.php">Write a Report</a></li>
            <li><a href="../index.php">Main Page</a></li>
            <li><a href="../addstaff/addstaff.php">Add Staff</a></li>
            <li><a href="../addprisoner/whichblock.php">Add Prisoner</a></li>
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
  <div class="page-wrapper p-t-165 p-b-100" >
        <div class="wrapper wrapper--w680">
            <div class="card card-2">
                <div class="card-body">
                    <ul class="tab-list">
                        <li class="tab-list__item active">
                            <a class="tab-list__link" href="#tab2" data-toggle="tab">Staff</a>
                        </li>
                        <li class="tab-list__item">
                            <a class="tab-list__link" href="#tab3" data-toggle="tab">Prisoner</a>
                        </li>
						<li class="tab-list__item">
                            <a class="tab-list__link" href="#tab4" data-toggle="tab">Visitor</a>
                        </li>
						<li class="tab-list__item">
                            <a class="tab-list__link" href="#tab5" data-toggle="tab">Request</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab2">
                            <form method="POST" action="../table/tableStaff.php">

                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Name:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="staffNameBox" id="staffNameBox" onclick="enableStaffName()">
											<span class="checkmark"></span></label>
											<input class="input--style-1" id="staffNameValue" type="text" name="staffNameValue" placeholder="" disabled>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Id:</label><label class="checkbox-container" style="color:white">. <input type="checkbox" name="staffIdBox" id="staffIdBox" onclick="enableStaffId()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="staffIdValue" id="staffIdValue" disabled>
                                                    <?php require_once "staff_id_query.php"; ?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Shift:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="staffShiftBox" id="staffShiftBox" onclick="enableStaffShift()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="staffShiftValue" id="staffShiftValue" disabled>
                                                    <option value="day">Day</option>
													<option value="night">Night</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Job:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="staffJobBox" id="staffJobBox" onclick="enableStaffJob()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="staffJobValue" id="staffJobValue" disabled>
                                                    <option value="nurse">Nurse</option>
													<option value="doctor">Doctor</option>
													<option value="guard">Guard</option>
													<option value="IT">IT</option>
													<option value="officer">Officer</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Salary:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="staffSalaryBox" id="staffSalaryBox" onclick="enableStaffSalary()">
											<span class="checkmark"></span></label>
                                            <input class="input--style-1" id="staffSalaryFromValue" type="number" name="staffSalaryFromValue" placeholder="From" disabled>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label" style="color:white">.</label>
                                            <input class="input--style-1" type="number" id="staffSalaryToValue" name="staffSalaryToValue" placeholder="To" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                        <div class="input-group">
                                            <label class="label">Block</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="staffBlockBox" id="staffBlockBox" onclick="enableStaffBlock()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="staffBlockValue" id="staffBlockValue" disabled>
                                                    <?php require_once "block_query2.php"; ?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row row-space">
										<div class="col-2">
											<button class="btn-submit m-t-0" type="button" onclick="window.location.replace('../table/tableStaff.php');">Show all Staff</button>
										</div>
										<div class="col-2">
											<button class="btn-submit m-t-0" type="submit">search</button>
										</div>
									</div>
                                
								
                            </form>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <form method="POST" action="../table/tablePrisoner.php">
                              
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Name:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="prisonerNameBox" id="prisonerNameBox" onclick="enablePrisonerName()">
											<span class="checkmark"></span></label>
											<input class="input--style-1" id="prisonerNameValue" type="text" name="prisonerNameValue" placeholder="" disabled>    
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Id:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="prisonerIdBox" id="prisonerIdBox" onclick="enablePrisonerId()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="prisonerIdValue" id="prisonerIdValue" disabled>
                                                    <?php require_once "prisoner_id_query.php"; ?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Crime:</label><label class="checkbox-container" style="color:white">. <input type="checkbox" name="prisonerCrimeBox" id="prisonerCrimeBox" onclick="enablePrisonerCrime()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="prisonerCrimeValue" id="prisonerCrimeValue" disabled>
                                                    <option value="thief">Thief</option>
													<option value="bribary">Bribary</option>
													<option value="murder">Murder</option>
													<option value="kill">Kill</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Cell Nb:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="prisonerCellBox" id="prisonerCellBox" onclick="enablePrisonerCell()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="prisonerCellValue" id="prisonerCellValue" disabled>
                                                     <?php require_once "cell_query.php"; ?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Duration:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="prisonerDurationBox" id="prisonerDurationBox" onclick="enablePrisonerDuration()">
											<span class="checkmark"></span></label>
                                            <input class="input--style-1" id="prisonerDurationFromValue" type="number" name="prisonerDurationFromValue" placeholder="From" disabled>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label" style="color:white">.</label>
                                            <input class="input--style-1" type="number" id="prisonerDurationToValue" name="prisonerDurationToValue" placeholder="To" disabled>
                                        </div>
                                    </div>
                                </div>
								<div class="row row-space">
									<div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Block</label><label class="checkbox-container" style="color:white">.  <input type="checkbox" name="prisonerBlockBox" id="prisonerBlockBox" onclick="enablePrisonerBlock()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="prisonerBlockValue" id="prisonerBlockValue" disabled>
                                                    <?php require_once "block_query3.php"; ?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
									</div>
									<div class="col-2">
										<div class="input-group">
											<label class="label">Age:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="prisonerAgeBox" id="prisonerAgeBox" onclick="enablePrisonerAge()">
											<span class="checkmark"></span></label>
											<input class="input--style-1" id="prisonerAgeValue" type="number" name="prisonerAgeValue" placeholder="" disabled>
										</div>
									</div>
								</div>
                                <div class="row row-space">
									<div class="col-2">
										<button class="btn-submit m-t-0" type="button" onclick="window.location.replace('../table/tablePrisoner.php');">Show all Prisoners</button>
									</div>
									<div class="col-2">
										<button class="btn-submit m-t-0" type="submit">search</button>
									</div>
								</div>
                            </form>
                        </div>
						
						<div class="tab-pane" id="tab4">
                            <form method="POST" action="../table/tableVisitor.php">
                              
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Name:</label> <label class="checkbox-container" style="color:white">.<input type="checkbox" name="visitorNameBox" id="visitorNameBox" onclick="enableVisitorName()">
											<span class="checkmark"></span></label>
                                            <input class="input--style-1" id="visitorNameValue" type="text" name="visitorNameValue" placeholder="" disabled>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Id:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="visitorIdBox" id="visitorIdBox" onclick="enableVisitorId()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="visitorIdValue" id="visitorIdValue" disabled>
                                                    <?php require_once "visitor_id_query.php"; ?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Email:</label><label class="checkbox-container" style="color:white">. <input type="checkbox" name="visitorEmailBox" id="visitorEmailBox" onclick="enableVisitorEmail()">
											<span class="checkmark"></span></label>
                                            <input class="input--style-1" id="visitorEmailValue" type="email" name="visitorEmailValue" placeholder="" disabled>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                           <label class="label">Phone Number:</label><label class="checkbox-container" style="color:white">. <input type="checkbox" name="visitorNumberBox" id="visitorNumberBox" onclick="enableVisitorNumber()">
											<span class="checkmark"></span></label>
                                            <input class="input--style-1" type="number" id="visitorNumberValue" name="visitorNumberValue" placeholder="To" disabled>
                                        </div>
                                    </div>
                                </div>
							    <div class="row row-space">
									<div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Priosnr Id:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="visitorPrisonerBox" id="visitorPrisonerBox" onclick="enableVisitorPrisoner()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="visitorPrisonerValue" id="visitorPrisonerValue" disabled>
                                                    <?php require_once "prisoner_id_query2.php"; ?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
									</div>
									<div class="col-2">
                                        <div class="input-group">
                                           <label class="label">Date:</label><label class="checkbox-container" style="color:white">. <input type="checkbox" name="visitorDateBox" id="visitorDateBox" onclick="enableVisitorDate()">
											<span class="checkmark"></span></label>
                                            <input class="input--style-1" type="date" id="visitorDateValue" name="visitorDateValue" placeholder="" disabled>
                                        </div>
                                    </div>
								</div>
                                
                                <div class="row row-space">
									<div class="col-2">
										<button class="btn-submit m-t-0" type="button" onclick="window.location.replace('../table/tableVisitor.php');">Show all Visitors</button>
									</div>
									<div class="col-2">
										<button class="btn-submit m-t-0" type="submit">search</button>
									</div>
								</div>
                            </form>
                        </div>
						
						
						
							<div class="tab-pane" id="tab5">
                            <form method="POST" action="../table/tableRequest.php">

                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Prisoner Id:</label><label class="checkbox-container" style="color:white">. <input type="checkbox" name="requestIdBox" id="requestIdBox" onclick="enableRequestId()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="requestIdValue" id="requestIdValue" disabled>
                                                    <?php require_once "prisoner_id_query3.php"; ?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Request Type:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="requestTypeBox" id="requestTypeBox" onclick="enableRequestType()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="requestTypeValue" id="requestTypeValue" disabled>
                                                    <option value="food">Food</option>
													<option value="clothes">Clothes</option>
													<option value="clothes">Clothes</option>
													<option value="shower">Shower</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">

                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Status:</label><label class="checkbox-container" style="color:white">.<input type="checkbox" name="requestStatusBox" id="requestStatusBox" onclick="enableRequestStatus()">
											<span class="checkmark"></span></label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="requestStatusValue" id="requestStatusValue" disabled>
                                                    <option value="accepted">Accepted</option>
													<option value="rejected">Rejected</option>
													<option value="pending">Pending</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-2">
                                        <div class="input-group">
                                           <label class="label">Date:</label><label class="checkbox-container" style="color:white">. <input type="checkbox" name="requestDateBox" id="requestDateBox" onclick="enableRequestDate()">
											<span class="checkmark"></span></label>
                                            <input class="input--style-1" type="date" id="requestDateValue" name="requestDateValue" placeholder="" disabled>
                                        </div>
                                    </div>
                                </div>
									
									<div class="row row-space">
										<div class="col-2">
											<button class="btn-submit m-t-0" type="button" onclick="window.location.replace('../table/tableRequest.php');">Show all Requests</button>
										</div>
										<div class="col-2">
											<button class="btn-submit m-t-0" type="submit">search</button>
										</div>
									</div>
                                
								
                            </form>
                        </div>
					
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Form -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../myassets/script.js"></script>
   

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
	
	<!-- Disabled inputs-->
	<script src="js/enable.js"></script>

</body>

</html>