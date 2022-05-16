<?php
	require_once "../../connection.php";
	if(isset($_GET['error'] )){
		$fname=$_GET['fname'];
		$salary=$_GET['salary'];
		$block=$_GET['block'];
	}
	else{
		if(isset($_POST['fname']) && isset($_POST['salary']) && isset($_POST['username']) && isset($_POST['password'])){
			extract($_POST);
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
				header("location:addadmin.php?fname=$fname&salary=$salary&block=$block&error=1");
			}
		}
	}

?>