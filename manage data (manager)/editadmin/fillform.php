<?php
	require_once "../../connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $selectquery="SELECT * FROM admin WHERE admin_id = " . $id;
	    $selectresult=mysqli_query($con, $selectquery);
        $selectrow = mysqli_fetch_assoc($selectresult);
        }
?>