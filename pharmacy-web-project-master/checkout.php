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
  <title>Checkout</title>
   <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/navfooter.css"> -->
  <style type="text/css">
  .head{
    background-color: black;
    color: white;
    font-size: 40px;
    font-weight: bold;
    height: 100px;
    padding: 30px;
    margin-top: 50px;
  }
/*
  table{
    border:1px solid black;
  }

  table td{
    padding: 20px;
    font-size: 20px;
    font-weight: bold;
*/
  }
  </style>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>

  <div  class="containner-fluid">
    <div class="head"> 
    <h1 class="text-center">ORDER SUMMARY</h1>
    </div>
    <div>
      <table class="table table-responsive-md">
        <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>Product</th>
          <th>Cost</th>
          <th>Quantity</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>


    </div>




  </div>
  
</body>
</html>