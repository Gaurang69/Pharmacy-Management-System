<?php
  session_start();

if (isset($_SESSION['curr_id'])) {
echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/navfooter.css">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <title>Profile</title>
  <style type="text/css">
    .container-fluid .card{
      width: 400px;
      margin:auto;
      margin-top: 20px;
      padding: 0px;
      margin-top: 20px;
      margin-bottom: 20px;
      text-align: center;
     }

     body{
      background-color: #eee;
     }

     .fa-user{
      font-size: 150px;
      padding :10px;
      margin-top:30px;
      border : 5px solid lightgrey;
      background-color : #eee;
     }

     .social a{
  font-size: 2em;
  padding: 1rem;
}

     .fa-facebook{
  color: #3b5998;
}

.fa-twitter{
  color: #00aced;
}

.fa-google-plus-g{
  color: #dd4b39;
}

.fa-youtube{
  color: #bb0000;
}

.fa-instagram{
  color: #517fa8;
}

.fa-facebook:hover,
.fa-twitter:hover,
.fa-google-plus-g:hover,
.fa-youtube:hover,
.fa-instagram:hover{
  color: #d5d5d5;
}

  </style>
</head>
<body>
';

include_once "includes/header.php";

echo '
<div class="container-fluid">
<div class="card">
  <div class="card-image-top">
  <i class="fa fa-user"></i>
  </div>
  <div class="card-body">  
  <h1 class="card-title">'.$_SESSION['curr_fname']." ".$_SESSION['curr_lname'].'</h1>
  <p class="card-text">Email : '.$_SESSION['curr_email'].'</p>
  <p class="card-text">Mobile :'.$_SESSION['curr_mobile'].'</p>
  <p class="card-text">Address : '.$_SESSION['curr_address']."<br>".$_SESSION['curr_city'].", ".$_SESSION['curr_state'].", ".$_SESSION['curr_zip'].'</p>
   
  <p class="social"><a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a></p>
</div>
</div>
</div>


';

include_once "includes/footer.php";
echo'
</body>
</html>
';
}
else{
  header("Location: login.php");
}