<?php
	require_once "../../connection.php";
    $selectquery="SELECT staff_id FROM staff";
	$result=mysqli_query($con, $selectquery);
	if(mysqli_num_rows($result)!==0){
	while($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['staff_id'].'">'.$row['staff_id'].'</option>';
    }   
	}
	


?>