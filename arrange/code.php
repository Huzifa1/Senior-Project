<?php
	require_once "../connection.php";
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone_number']) && isset($_POST['relation']) && isset($_POST['p_id']) && isset($_POST['date'])){
		$v_name=$_POST['name'];
		$email=$_POST['email'];
		$phone_number=$_POST['phone_number'];
		$relation=$_POST['relation'];
		$p_id=$_POST['p_id'];
		$date=$_POST['date'];
		$insertquery="INSERT INTO visitor(visitor_name, phone_nb, email, kinship, visit_date, prisoner_id, request_status) VALUES ('$v_name','$phone_number','$email','$relation','$date','$p_id', 'pending')";
		$result1=mysqli_query($con, $insertquery);
		$getallpidquery = "SELECT prisoner_id FROM prisoner";
		$result2=mysqli_query($con, $getallpidquery);
		$boolean = false;
		while($row = mysqli_fetch_assoc($result2)){
			if($row['prisoner_id'] == $p_id){
				$boolean = true;
			}
		}
			if($boolean == true){
				header("location:date.html");	
			}
			else{
				echo "<label style='color:red; margin-top:auto;'>Incorrect Prisoner Id!</label>";	
			}
	}

?>