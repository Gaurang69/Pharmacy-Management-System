<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	// Check if empty

	if (empty($email) || empty($password)) {
		header("Location: ../login.php?login=empty");
		exit();
	}
	else{
		$sql = "SELECT * from user WHERE email = '$email'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
				header("Location: ../login.php?login=invalid");
				exit();
			}
			else{

			if ($row = mysqli_fetch_assoc($result)) {
				//Dehashing the password
				$hashedPwdCheck = password_verify($password, $row['password']);
				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=invalid");
					exit();
				}
				elseif ($hashedPwdCheck == true) {
					//Login the user
					$_SESSION['curr_id'] = $row['id'];
					$_SESSION['curr_fname'] = $row['fname'];
					$_SESSION['curr_lname'] = $row['lname'];
					$_SESSION['curr_email'] = $row['email'];
					$_SESSION['curr_mobile'] = $row['mobile'];
					$_SESSION['curr_address'] = $row['address1'];
					$_SESSION['curr_city'] = $row['city'];
					$_SESSION['curr_state'] = $row['state'];
					$_SESSION['curr_zip'] = $row['zip'];
					$_SESSION['logged_in']=1;       
			        $temp_id=rand(1,10000);
			        $_SESSION['Order_no']=$temp_id;
			        $_SESSION['totalamt']=0;
					header("Location: ../index.php?login=success");
					exit();
				}

			
			}
		}
	}
}
else{
	header("Location: ../register.php");
	exit();
}
