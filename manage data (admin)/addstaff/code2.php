<?php
	require_once "../../connection.php";
    $selectquery="SELECT block FROM block";
	$result=mysqli_query($con, $selectquery);
	while($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['block'].'">'.$row['block'].'</option>';
    }   
?>