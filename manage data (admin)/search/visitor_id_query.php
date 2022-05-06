<?php
	require_once "../../connection.php";
    $selectquery="SELECT visit_id FROM visitor";
	$result=mysqli_query($con, $selectquery);
	if(mysqli_num_rows($result)!==0){
	while($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['visit_id'].'">'.$row['visit_id'].'</option>';
    }   
	}
	


?>