<?php
	require_once "../../connection.php";
    extract($_POST);
    if(isset($fname) && isset($salary) && isset($username)){
        $id = 0;
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $selectquery="SELECT username FROM admin WHERE admin_id != ".$id;
	    $selectresult=mysqli_query($con, $selectquery);
        $adminExist = false;
        while($selectrow = mysqli_fetch_assoc($selectresult)){
            if($username == $selectrow['username']){
                $adminExist = true;
            }
        }

        if($adminExist == false){
        
        $insertquery="UPDATE admin SET admin_name='$fname',admin_salary='$salary',username='$username',block='$block' WHERE admin_id = '$id'";
        $result=mysqli_query($con, $insertquery);
        header("location:../index.php");
        }
        else{
            header("location:editadmin.php?error=1&id=". $id);
        }
    }
   

?>