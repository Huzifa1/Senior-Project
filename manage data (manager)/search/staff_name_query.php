<?php
	require_once "../../connection.php";
    $selectquery="SELECT staff_name FROM staff";
	$result=mysqli_query($con, $selectquery);

	while($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['staff_name'].'">'.$row['staff_name'].'</option>';
       
	}
	


?>