<?php
	require_once "../connection.php";
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username=$_POST['username'];
		$username=stripcslashes($username);
		$username=mysqli_real_escape_string($con, $username); //Strip the username
		$password=md5($_POST['password']); //Encrypt the password
		$encrypted_admin = md5('admin');	//Encrypt admin
		$myquery="SELECT * FROM admin where username='$username' AND password='$password'";
		$result=mysqli_query($con, $myquery);
		$row = mysqli_fetch_assoc($result);
		if($username=='admin' and $password==$encrypted_admin ){ 
			session_start();
			$_SESSION['isloggedin']=1;
			$_SESSION['username']=$username;
			header("location:../manager/index.php");	
		}
		elseif(mysqli_num_rows($result)!==0){
			session_start();
			$_SESSION['isloggedin']=1;
			$_SESSION['username']=$row['admin_name'];
			header("location:../admin/index.php");
		}
		else{
			echo "<label style='color:red; margin-top:20px;'> Username or Password is incorrect!</label>";
			// header("location:login/index.html");
		}
	}

?>