<?php
    session_start();
	require_once "../../connection.php";
    $id = $_GET['id'];
    $block= $_GET['block'];
    extract($_POST);
    if(isset($fname) && isset($lname) && isset($age) && isset($crime) && isset($cell) && isset($duration)){ 
        $fullname = $fname . ' ' . $lname;
        $insertquery="UPDATE prisoner SET priosner_name='$fullname',age='$age',crime='$crime',duration='$duration',cell_nb='$cell',block='$block' WHERE prisoner_id = '$id'";
        $result=mysqli_query($con, $insertquery);
        header("location:../index.php");
    }
   

?>