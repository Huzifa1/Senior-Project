<?php
	
	require_once "../connection.php";
	$date = date("Y-m-d");
	if(isset($_POST['report'])){
		$report=$_POST['report'];
		$id = $_SESSION['id'];
		$insertquery="INSERT INTO report(admin_id, report_date, text) VALUES ('$id','$date','$report')";
		$result=mysqli_query($con, $insertquery);
		
	}
	

?>