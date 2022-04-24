<?php
	require_once "../../connection.php";
    extract($_POST);
    if(isset($fname) && isset($salary) && isset($username) && isset($password)){
        $selectquery="SELECT username FROM admin";
	    $selectresult=mysqli_query($con, $selectquery);
        $adminExist = false;
        while($selectrow = mysqli_fetch_assoc($selectresult)){
            if($username == $selectrow['username']){
                $adminExist = true;
            }
        }

        if($adminExist == false){
        $encryptedpass = md5($password);
        $insertquery="INSERT INTO admin(admin_name, admin_salary, username, password, block) VALUES ('$fname','$salary','$username','$encryptedpass','$block')";
        $result=mysqli_query($con, $insertquery);
        header("location:addadmin.php");
        }
        else{
            header("location:addadmin.php?error=1");
        }
    }
   

?>