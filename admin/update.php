<?php 
	require_once "../connection.php";
	if(isset($_GET['id']) && isset($_GET['status'])){
		$query='UPDATE visitor SET request_status="'.$_GET['status'].'" where visit_id='.$_GET['id'];
		$result=mysqli_query($con, $query);
		header("location:index.php");
	}
	
	if(isset($_GET['prisoner_id']) && isset($_GET['type']) && isset($_GET['status'])){
		$query='UPDATE request SET status="'.$_GET['status'].'" where prisoner_id='.$_GET['prisoner_id'].' and type = "'.$_GET['type'].'"';
		$result=mysqli_query($con, $query);
		header("location:index.php");
	}
?>