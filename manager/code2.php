<?php
	require_once "../connection.php";
	$date = date("Y-m-d");
	if(isset($_GET['date'])){
	$date = $_GET['date'];						
	}
	$myquery = "SELECT block FROM block";
	$result=mysqli_query($con, $myquery);
	while($row = mysqli_fetch_assoc($result)){
			echo '<li><a href="index.php?block='.$row['block'].'&date='.$date.'">'.$row['block'].'</a></li>';
	}
					
 ?>