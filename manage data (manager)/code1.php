<?php

	require_once "../connection.php";
	$today = date("Y-m-d");
	
	$nbofblocksquery="select count(*) FROM block";
	$nbofblocksresult=mysqli_query($con, $nbofblocksquery);
	$nbofblocks = mysqli_fetch_assoc($nbofblocksresult);
	$blocks = $nbofblocks['count(*)'];
	
	$nbofprisonersquery="select count(*) FROM prisoner";
	$nbofprisonersresult=mysqli_query($con, $nbofprisonersquery);
	$nbofprisoners = mysqli_fetch_assoc($nbofprisonersresult);
	$prisoners = $nbofprisoners['count(*)'];
	
	$nbofstaffquery="select count(*) FROM staff";
	$nbofstaffresult=mysqli_query($con, $nbofstaffquery);
	$nbofstaff = mysqli_fetch_assoc($nbofstaffresult);
	$staff = $nbofstaff['count(*)'];
	
	$nbofvisitorsquery="select count(*) FROM visitor WHERE visit_date = '$today'";
	$nbofvisitorsresult=mysqli_query($con, $nbofvisitorsquery);
	$nbofvisitors = mysqli_fetch_assoc($nbofvisitorsresult);
	$visitors = $nbofvisitors['count(*)'];
?>