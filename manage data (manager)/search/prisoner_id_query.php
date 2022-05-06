<?php
	require_once "../../connection.php";
    $selectquery="SELECT prisoner_id FROM prisoner";
	$result=mysqli_query($con, $selectquery);
	if(mysqli_num_rows($result)!==0){
	while($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['prisoner_id'].'">'.$row['prisoner_id'].'</option>';
    }   
	}
	


?>