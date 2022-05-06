<?php
	require_once "../../connection.php";
    $selectquery="SELECT cell_nb FROM cell";
	$result=mysqli_query($con, $selectquery);
	if(mysqli_num_rows($result)!==0){
	while($row = mysqli_fetch_assoc($result)){
        echo '<option value="'.$row['cell_nb'].'">'.$row['cell_nb'].'</option>';
    }   
	}
	


?>