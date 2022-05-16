<?php 
	

	require_once "../../connection.php";
	$nbofrowsquery="select count(*) FROM visitor NATURAL JOIN prisoner WHERE request_status = 'pending' AND block = '".$_SESSION['block']."'";
	$nbofrowsresult=mysqli_query($con, $nbofrowsquery);
	$nbofrows = mysqli_fetch_assoc($nbofrowsresult);
	$count = $nbofrows['count(*)'];
	$nbofrowsquery="select count(*) FROM request NATURAL JOIN prisoner WHERE status = 'pending' AND block = '".$_SESSION['block']."'";
	$nbofrowsresult=mysqli_query($con, $nbofrowsquery);
	$nbofrows = mysqli_fetch_assoc($nbofrowsresult);
	$count += $nbofrows['count(*)'];
	if($count != 0){
	echo '<span style="color:red;background-color:white" class="badge badge-light">' .$count.'</span>'; 
	}
?>