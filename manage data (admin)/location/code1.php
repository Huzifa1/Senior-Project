<?php
	require_once "../../connection.php";
	$id = 0;
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	
	$selectquery="SELECT * FROM prisoner where prisoner_id = '$id'";
	$result=mysqli_query($con, $selectquery);
	$row = mysqli_fetch_assoc($result);
?>