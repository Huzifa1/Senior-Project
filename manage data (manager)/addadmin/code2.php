<?php
	require_once "../../connection.php";
    $selectquery="SELECT block FROM block WHERE block NOT IN (SELECT block FROM admin);";
	$result=mysqli_query($con, $selectquery);
	if(mysqli_num_rows($result)!==0){
	while($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['block'].'">'.$row['block'].'</option>';
    }   
	}
	else{
		echo '<h3> Each block has an admin. </h3>';
	}


?>