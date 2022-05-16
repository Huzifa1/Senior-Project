<?php
	require_once "../connection.php";
	if(isset($_GET['error'] )){
		$v_name=$_GET['name'];
		$email=$_GET['email'];
		$phone_number=$_GET['phone_nb'];
		$relation=$_GET['relation'];
		if($_GET['other'] != ''){
		$relation=$_GET['other'];
		}
		$date=$_GET['date'];
	}
	else if (isset($_GET['date_error'])){
		$v_name=$_GET['name'];
		$email=$_GET['email'];
		$phone_number=$_GET['phone_nb'];
		$relation=$_GET['relation'];
		if($_GET['other'] != ''){
		$relation=$_GET['other'];
		}
		$date=$_GET['date'];
		$p_id=$_GET['p_id'];
	}
	else{
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone_number']) && isset($_POST['relation']) && isset($_POST['p_id']) && isset($_POST['date'])){
			$v_name=$_POST['name'];
			$email=$_POST['email'];
			$phone_number=$_POST['phone_number'];
			$relation=$_POST['relation'];
			$other = '';
			if(isset($_POST['others']) && $_POST['others'] != ''){
			$relation = $_POST['others'];
			$other =  $_POST['others'];
			}
			$p_id=$_POST['p_id'];
			$date=$_POST['date'];
			if($_POST['date'] != ''){		
				$getallpidquery = "SELECT prisoner_id FROM prisoner";
				$result2=mysqli_query($con, $getallpidquery);
				$boolean = false;
				while($row = mysqli_fetch_assoc($result2)){
					if($row['prisoner_id'] == $p_id){
						$boolean = true;
					}
				}
				if($boolean == true){
					$insertquery="INSERT INTO visitor(visitor_name, phone_nb, email, kinship, visit_date, prisoner_id, request_status) VALUES ('$v_name','$phone_number','$email','$relation','$date','$p_id', 'pending')";
					$result1=mysqli_query($con, $insertquery);
					header("location:date.html");
				}
				else{
					header("location:index.php?name=$v_name&email=$email&phone_nb=$phone_number&relation=$relation&other=$other&date=$date&error=1");
				}
			}
			else{
				header("location:index.php?name=$v_name&email=$email&phone_nb=$phone_number&relation=$relation&other=$other&p_id=$p_id&date=$date&date_error=1");
			}		
		}
	}
?>