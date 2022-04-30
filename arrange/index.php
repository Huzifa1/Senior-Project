<!DOCTYPE html>
<html lang="en">
<head>


	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrange a Date</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/myarrangestyle.css">
	
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" action="index.php" class="appointment-form" id="appointment-form" onsubmit="return validate_form();">
                <h2>Take an Appointment Form</h2>
                <div class="form-group-1">
                    <input type="text" name="name" id="name" placeholder="Your Name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" onkeyup="checkphone()" required  />
					<label id="error"></label>
                </div>
                <div class="form-group-2">
                    <h3>What is your relationship to the prisoner?</h3>
                    <div class="select-list">
                        <select name="relation" id="onfirm_type" style="margin-bottom: -20px;" >
                            <option value="mother">Mother</option>
                            <option value="father">Father</option>
							<option value="son">Son</option>
                            <option value="daughter">Daughter</option>
							<option value="sister">Sister</option>
                            <option value="brother">Brother</option>
							<option value="uncle">Uncle</option>
                            <option value="aunt">Aunt</option>
							<option value="grandparent">Grandparent</option>
							<option value="friend">Friend</option>
							
                        </select>
                    </div>
					
					<h3>What is the id of the prisoner you are visiting?</h3>
                    <div class="form-group-1">
						<input type="text" name="p_id" id="name" placeholder="Prisoner id" required />
						<?php require_once "code.php"; ?>
					</div>
					
					<h3>Select a date for the visit</h3>
                    <div class="form-group-1">
						<input id="date" type="date" name="date" placeholder="dd-mm-yyyy" value="" min="" max="2030-12-31">
					</div>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Request an appointment" />
					<input type="button" id="submit" class="submit" value="Go Back" onclick="window.location.replace('../Sailor');"/>
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/myfunction.js"></script>
</body>
</html>