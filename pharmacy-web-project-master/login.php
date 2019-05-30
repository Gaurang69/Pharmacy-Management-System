<?php
session_start();

if (isset($_SESSION['curr_id'])) {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/navfooter.css">
  <title>Login</title>
  <style type="text/css">

#bg{ 
    background: url('images/301876.jpg') no-repeat center center fixed;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
} 

.f2{
  background-color: #eee;
  padding: 50px 60px;
  margin: auto;
  margin-top: 50px;
  margin-bottom: 50px;
  -webkit-box-shadow: 1px 0px 16px 3px rgba(0,0,0,0.75);
  -moz-box-shadow: 1px 0px 16px 3px rgba(0,0,0,0.75);
  box-shadow: 1px 0px 16px 3px rgba(0,0,0,0.75);
}

.container-fluid { 
  padding: 0px!important;
  overflow-x: hidden;
}

.fa-user{
	font-size: 4rem;
	margin-bottom: 20px;

}

  </style>
</head>
<body id="bg">

  <?php
  include_once 'includes/header.php';
  ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
	
	<div class="col-md-4 col-sm-4 col-xs-12">
	<form action="includes/login.inc.php" method="POST" class="form-container f2">
		<center><i class="fa fa-user"></i></center>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" name="submit" class="btn-success btn-block btn-lg">Login</button>
  <small id="notRegistered" class="form-text text-muted">Dont have an account yet?<b><a <?php echo 'href="register.php"'?>> Register</a></b> here.</small>
</form>
</div>
 
</div><!-- container -->
<?php
  include_once 'includes/footer.php';
  ?>



<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>