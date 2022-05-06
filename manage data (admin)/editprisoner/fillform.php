<?php
	require_once "../../connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $selectquery="SELECT * FROM prisoner WHERE prisoner_id = " . $id;
	    $selectresult=mysqli_query($con, $selectquery);
        $selectrow = mysqli_fetch_assoc($selectresult);
        $fullname = explode(" ", $selectrow['priosner_name']);


        $selectquery1="SELECT block FROM prisoner WHERE prisoner_id ='" . $id."'";
        $result1=mysqli_query($con, $selectquery1);
        $row1 = mysqli_fetch_assoc($result1);
        $block = $row1['block'];
        if(isset($_GET['block'])){
            $block = $_GET['block'];
        }


        }

        
	
?>