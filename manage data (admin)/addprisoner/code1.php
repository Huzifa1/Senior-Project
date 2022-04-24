<?php
    session_start();
	require_once "../../connection.php";
    $id = $_SESSION['id'];
    $block= $_SESSION['block'];
    extract($_POST);
    if(isset($fname) && isset($lname) && isset($age) && isset($crime) && isset($cell) && isset($duration)){ 
        $fullname = $fname . ' ' . $lname;
        $insertquery="INSERT INTO prisoner(priosner_name, age, crime, duration, cell_nb, block, admin_id) VALUES ('$fullname','$age','$crime','$duration','$cell','$block','$id')";
        $result=mysqli_query($con, $insertquery);
        header("location:whichblock.php");
    }
   

?>