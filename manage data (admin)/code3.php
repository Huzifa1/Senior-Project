<?php

	require_once "../connection.php";
	$today = date("Y-m-d");
	
	$query="select count(*) FROM block";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$blocks = $row['count(*)'];
	
	$query="select count(*) FROM prisoner";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$prisoners = $row['count(*)'];
	
	$query="select count(*) FROM staff";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$staff = $row['count(*)'];
	
	$query="select count(*) FROM visitor WHERE visit_date = '$today'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$visitors = $row['count(*)'];
	
	$query="select count(*) FROM prisoner WHERE crime = 'thief'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfThief = $row['count(*)'];
	
	$query="select count(*) FROM prisoner WHERE crime = 'rape'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfRape = $row['count(*)'];
	
	$query="select count(*) FROM prisoner WHERE crime = 'manslaughter'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfManslaughter = $row['count(*)'];
	
	$query="select count(*) FROM prisoner WHERE crime = 'money fraud'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfMoneyFraud = $row['count(*)'];
	
	$query="select count(*) FROM prisoner WHERE block = 'A'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfPriosnersA = $row['count(*)'];
	
	$query="select count(*) FROM prisoner WHERE block = 'B'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfPriosnersB = $row['count(*)'];
	
	$query="select count(*) FROM prisoner WHERE block = 'C'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfPriosnersC = $row['count(*)'];
	
	$query="select count(*) FROM prisoner WHERE block = 'D'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfPriosnersD = $row['count(*)'];
	
	$query="select count(*) FROM staff WHERE block = 'A'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfStaffA = $row['count(*)'];
	
	$query="select count(*) FROM staff WHERE block = 'B'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfStaffB = $row['count(*)'];
	
	$query="select count(*) FROM staff WHERE block = 'C'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfStaffC = $row['count(*)'];
	
	$query="select count(*) FROM staff WHERE block = 'D'";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfStaffD = $row['count(*)'];
	
	$query="SELECT count(*) FROM request";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$nbOfRequests = $row['count(*)'];
	
?>