<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/navfooter.css">
  <style type="text/css">
    #bg{ 
    background: url('images/301876.jpg') no-repeat center center fixed;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
} 

.f1{
   background-color: #eee;
  max-width: 700px;
  margin: auto;
  max-height: auto;
  overflow-y: hidden;
  overflow: auto;
  width: auto
  height:auto;
  margin-bottom: 50px;
  padding: 60px 40px;
  margin-top: 50px;
  -webkit-box-shadow: 1px 0px 16px 3px rgba(0,0,0,0.75);
  -moz-box-shadow: 1px 0px 16px 3px rgba(0,0,0,0.75);
  box-shadow: 1px 0px 16px 3px rgba(0,0,0,0.75);
}

@media (max-width: 576px){
 .f1{
 max-width:45%;
  margin: auto;
  max-height: auto;
  overflow-y: hidden;
  overflow: auto;
  width: auto
  height:auto;
  margin-bottom: 20px;
  padding: 20px 20px;
  margin-top: 50px;
  } 

}

  </style>
  

<title>Registration</title>

</head>
<body id="bg">

  <?php 
    include_once 'includes/header.php';
  ?>


<div  class="container-fluid">
	
	<form class="form-container f1" action="includes/register.inc.php" method="POST">
		<center><h1 class="text-center display-4">Registration</h1></center>
    <hr class="light">
    <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="fname">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="lname">
    </div>
  </div>




  <div class="form-row">
    <div class="form-group col-md-12">
      <label style="padding-top: 10px;" for="inputEmail4">Email</label>
      <input type="email" required="required" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4">Password</label>
      <input name="password" type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
<small id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 charactersto be considered strong.
</small>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="confirmPassword">Confirm Password</label>
      <input name="con_pass" type="password" required="required" class="form-control" id="confirmPassword" placeholder="Confirm Password">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="mobile">Mobile No.</label>
      <input type="text" name="mobile" required="required" maxlength="10" class="form-control" id="mobile">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text"  name ="address1" required="required" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name ="city" required="required" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" name ="state" required="required" class="form-control" id="inputState">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" required="required" name ="zip" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Keep me signed in.
      </label>
    </div>
  </div>
  <button type="submit" name="submit" class="btn-info btn-block btn-lg">Sign in</button>
  <small id="arlreadyRegistered" class="form-text text-muted">Already have an account? <b><a href="login.php">Login</a></b> here.</small>
</form>
</div>

<?php
include_once 'includes/footer.php';
?>



<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/pageanimation.js"></script> -->
</body>
</html>