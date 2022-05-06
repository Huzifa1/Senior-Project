<?php
	require_once "../../connection.php";
    $selectquery="SELECT admin_id FROM admin";
	$result=mysqli_query($con, $selectquery);
	if(mysqli_num_rows($result)!==0){
	while($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['admin_id'].'">'.$row['admin_id'].'</option>';
    }   
	}
	


?>