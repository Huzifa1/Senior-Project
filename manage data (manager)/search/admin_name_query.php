<?php
	require_once "../../connection.php";
    $selectquery="SELECT admin_name FROM admin";
	$result=mysqli_query($con, $selectquery);

	while($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['admin_name'].'">'.$row['admin_name'].'</option>';
       
	}
	


?>