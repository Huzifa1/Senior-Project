<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "code.php"; ?>

	
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
                    <input type="text" name="name" id="name" value="<?php if(isset($v_name)){echo $v_name;} ?>" placeholder="Your Name" required />
                    <input type="email" name="email" id="email" value="<?php if(isset($email)){echo $email;} ?>" placeholder="Email" required />
                    <input type="number" name="phone_number" id="phone_number" value="<?php if(isset($phone_number)){echo $phone_number;} ?>" placeholder="Phone number" onkeyup="checkphone()" required  />
					<label id="error"></label>
                </div>
                <div class="form-group-2">
                    <h3>What is your relationship to the prisoner?</h3>
                    <div class="select-list">
                        <select name="relation" id="onfirm_type" style="margin-bottom: -20px;" onchange="check(this);">
                            <option <?php if(isset($relation)){ if($relation=='mother'){echo 'selected="selected"';}}?> value="mother">Mother</option>
                            <option <?php if(isset($relation)){ if($relation=='father'){echo 'selected="selected"';}}?> value="father">Father</option>
							<option <?php if(isset($relation)){ if($relation=='son'){echo 'selected="selected"';}}?> value="son">Son</option>
                            <option <?php if(isset($relation)){ if($relation=='daughter'){echo 'selected="selected"';}}?> value="daughter">Daughter</option>
							<option <?php if(isset($relation)){ if($relation=='sister'){echo 'selected="selected"';}}?> value="sister">Sister</option>
                            <option <?php if(isset($relation)){ if($relation=='brother'){echo 'selected="selected"';}}?> value="brother">Brother</option>
							<option <?php if(isset($relation)){ if($relation=='uncle'){echo 'selected="selected"';}}?> value="uncle">Uncle</option>
                            <option <?php if(isset($relation)){ if($relation=='aunt'){echo 'selected="selected"';}}?> value="aunt">Aunt</option>
							<option <?php if(isset($relation)){ if($relation=='grandparent'){echo 'selected="selected"';}}?> value="grandparent">Grandparent</option>
							<option <?php if(isset($relation)){ if($relation=='friend'){echo 'selected="selected"';}}?> value="friend">Friend</option>
							<option <?php if(isset($relation)){ if($relation=='other'){echo 'selected="selected"';}}?> value="other">Other</option>
                        </select>
                    </div>
					<input type="text" name="others" id="others" placeholder="What is your relativity to the prisoner?" value="<?php if(isset($relation)){if($_GET['other'] != ''){echo $relation;}} ?>" style="display: none;"/>
					
					<h3>What is the id of the prisoner you are visiting?</h3>
                    <div class="form-group-1">
						<input type="text" name="p_id" id="name" value="<?php if(isset($p_id)){echo $p_id;} ?>" placeholder="Prisoner id" required />
						<?php if(isset($_GET['error'])){echo "<label style='color:red; margin-top:10px;'>Incorrect Prisoner Id!</label>";} ?>
					</div>
					
					<h3>Select a date for the visit</h3>
                    <div class="form-group-1">
						<input id="date" type="date" name="date" placeholder="dd-mm-yyyy" value="<?php if(isset($date)){echo $date;} ?>" min="<?php echo date("Y-m-d"); ?>" >
						<?php if(isset($_GET['date_error'])){echo "<label style='color:red; margin-top:10px;'>Please select a correct date</label>";} ?>
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
	
	<script>
		function check(that) {
		if (that.value == "other") {
			document.getElementById("others").style.display = "block";
		} else {
			document.getElementById("others").style.display = "none";
		}
	}
	</script>
</body>
</html>