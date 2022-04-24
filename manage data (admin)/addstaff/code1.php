<?php
	require_once "../../connection.php";
    extract($_POST);
    if(isset($fname) && isset($lname) && isset($salary) && isset($job) && isset($shift) && isset($block)){ 
        $fullname = $fname . " " . $lname;
        $insertquery="INSERT INTO staff(staff_name, staff_job, staff_salary, staff_shift, block) VALUES ('$fullname','$job','$salary','$shift','$block')";
        $result=mysqli_query($con, $insertquery);
        header("location:addstaff.php");
    }
   

?>