<?php
	require_once "../../connection.php";
    extract($_POST);
    if(isset($fname) && isset($lname) && isset($salary) && isset($job) && isset($shift) && isset($block)){ 
        $id = 0;
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $fullname = $fname . " " . $lname;
        $insertquery="UPDATE staff SET staff_name='$fullname',staff_job='$job',staff_salary='$salary',staff_shift='$shift',block='$block' WHERE staff_id = '$id'";
        $result=mysqli_query($con, $insertquery);
        header("location:../index.php");
    }
   

?>