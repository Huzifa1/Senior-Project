<?php
	require_once "../../connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $selectquery="SELECT * FROM staff WHERE staff_id = " . $id;
	    $selectresult=mysqli_query($con, $selectquery);
        $selectrow = mysqli_fetch_assoc($selectresult);
        $fullname = explode(" ", $selectrow['staff_name']);
        }
?>