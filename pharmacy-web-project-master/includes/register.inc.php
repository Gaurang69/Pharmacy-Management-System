<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'dbh.inc.php';

if(isset($_POST['submit'])) {

	

	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$con_pass = mysqli_real_escape_string($conn, $_POST['con_pass']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$address1 = mysqli_real_escape_string($conn, $_POST['address1']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$zip = mysqli_real_escape_string($conn, $_POST['zip']);


	//Error Handlers
	//Check for empty fields

	if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($con_pass) || empty($mobile) || empty($address1) || empty($city) || empty($state) || empty($zip)) {
		header("Location: ../register.php?register=empty");
		exit();
	}
	else{
		if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
			header("Location: ../register.php?register=invalid");
			exit();
		}

		else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../register.php?register=email");
				exit();
			}
			$sql = "SELECT * FROM user WHERE email='$email';";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
				header("Location: ../register.php?register=alreadyexist");
				exit();
			}
			else{
				if ($_POST['password']!= $_POST['con_pass'])
 				{
 					header("Location: ../register.php?register=passNotmatch");
					exit();     			
 				}	
				$hashedPwd = password_hash($password , PASSWORD_DEFAULT);
				$hashedCon_Pwd = password_hash($con_pass , PASSWORD_DEFAULT);
				//Insert User into Database
				$sql = "INSERT INTO user(fname,lname,email,password,con_pass,mobile,address1,city,state,zip) VALUES('$fname','$lname','$email','$hashedPwd','$hashedCon_Pwd','$mobile','$address1','$city','$state','$zip');";
				mysqli_query($conn, $sql);
				header("Location: ../login.php?register=success");
				exit();
			}

		}
	}

}
else{
	header("Location: ../register.php");
	exit();
}
