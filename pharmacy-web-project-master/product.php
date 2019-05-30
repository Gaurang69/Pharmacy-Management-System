<?php
session_start();
if(!isset($_SESSION['curr_id'])){
  header("Location: login.php");
}
require_once 'includes/dbh.inc.php';

  
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
  <title>Products</title>
  <style type="text/css">

       .body{
        padding: 0;
        margin: 0;
       } 

      .container-grid{
        background-color: #eee;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(3, 1fr);
        grid-gap: 1em;
        padding: 1em;


      }

      .box{
        background-color: #eee;
        padding: 1em;
      }

      .card1 img{
  max-height: 200px;
  
}


.card1 {
  -webkit-box-shadow: 1px 1px 12px 1px rgba(0,0,0,0.75);
  -moz-box-shadow: 1px 1px 12px 1px rgba(0,0,0,0.75);
  box-shadow: 1px 1px 12px 1px rgba(0,0,0,0.75);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  transition: 0.5s;
}

.card1:hover{
    transform: scale(1.1, 1.1);
}

.card1 .price {
  color: grey;
  font-size: 22px;
}



.card1 button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card1 button:hover {
  opacity: 0.7;
}

.page{
margin: 0;
}

#grid2{
    display: none;
}


  </style>
  <script type="text/javascript">
  function cartFunction(){
  alert("Item added to cart");
}
</script>

</head>
<body>
    <?php
    include_once 'includes/header.php';
    ?>
    <div class="container-grid" id="grid1">
      <?php
      $sql = "SELECT * FROM medicines WHERE medicine_id='1'";
      $result = mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '
        <div class="box product1">
        <div class="card1">
          <img src="images/m1.jpg" alt="Denim Jeans" style="width:100%">
          <h3>'.$row["Name"].'</h3>
          <p class="price">'.$row["Price"].' Rs</p>
          <p>'.$row["Benefits"].'</p>
          <p><button class="addToCart" onclick="cartFunction()" data-id="'.$row["medicine_id"].'" name="addCart">Add to Cart</button></p>
        </div>
        </div> ';
        ?>

        <?php
      $sql = "SELECT * FROM medicines WHERE medicine_id='2'";
      $result = mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '
        <div class="box product1">
        <div class="card1">
          <img src="images/m2.jpg" alt="Denim Jeans" style="width:100%">
          <h3>'.$row["Name"].'</h3>
          <p class="price">'.$row["Price"].' Rs</p>
          <p>'.$row["Benefits"].'</p>
          <p><button class="addToCart" onclick="cartFunction()" data-id="'.$row["medicine_id"].'" name="addCart">Add to Cart</button></p>
        </div>
        </div> ';
        ?>
        
        <?php
      $sql = "SELECT * FROM medicines WHERE medicine_id='3'";
      $result = mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '
        <div class="box product1">
        <div class="card1">
          <img src="images/m3.jpg" alt="Denim Jeans" style="width:100%">
          <h3>'.$row["Name"].'</h3>
          <p class="price">'.$row["Price"].' Rs</p>
          <p>'.$row["Benefits"].'</p>
          <p><button class="addToCart" onclick="cartFunction()" data-id="'.$row["medicine_id"].'" name="addCart">Add to Cart</button></p>
        </div>
        </div> ';
        ?>

        <?php
      $sql = "SELECT * FROM medicines WHERE medicine_id='4'";
      $result = mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '
        <div class="box product1">
        <div class="card1">
          <img src="images/m4.jpg" alt="Denim Jeans" style="width:100%">
          <h3>'.$row["Name"].'</h3>
          <p class="price">'.$row["Price"].' Rs</p>
          <p>'.$row["Benefits"].'</p>
          <p><button class="addToCart" onclick="cartFunction()" data-id="'.$row["medicine_id"].'" name="addCart">Add to Cart</button></p>
        </div>
        </div> ';
        ?>

        <?php
      $sql = "SELECT * FROM medicines WHERE medicine_id='5'";
      $result = mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '
        <div class="box product1">
        <div class="card1">
          <img src="images/m5.jpg" alt="Denim Jeans" style="width:100%">
          <h3>'.$row["Name"].'</h3>
          <p class="price">'.$row["Price"].' Rs</p>
          <p>'.$row["Benefits"].'</p>
          <p><button class="addToCart" onclick="cartFunction()" data-id="'.$row["medicine_id"].'" name="addCart">Add to Cart</button></p>
        </div>
        </div> ';
        ?>

        <div class="box product6">
        <div class="card1">
          <img src="images/m6.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div>
    </div>

        <div class="box product7">
        <div class="card1">
          <img src="images/m7.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div></div>

        <div class="box product8">
        <div class="card1">
          <img src="images/m8.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div></div>

        <div class="box product9">
            <div class="card1">
          <img src="images/m9.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div>
        </div>
    </div>
    <div>
<!-- ------------------------------------------------------- -->
        <div class="container-grid" id="grid2">
        <div class="box product1">
        <div class="card1">
          <img src="images/m1.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div>
        </div>

        <div class="box product2">
            <div class="card1">
          <img src="images/m2.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div>
        </div>

        <div class="box product3">
            <div class="card1">
          <img src="images/m3.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div>
        </div>

        <div class="box product4">
            <div class="card1">
          <img src="images/m4.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div>
        </div>

        <div class="box product5">
            <div class="card1">
          <img src="images/m5.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div>
        </div>

        <div class="box product6">
        <div class="card1">
          <img src="images/m6.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div>
    </div>

        <div class="box product7">
        <div class="card1">
          <img src="images/m7.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div></div>

        <div class="box product8">
        <div class="card1">
          <img src="images/m2.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div></div>

        <div class="box product9">
            <div class="card1">
          <img src="images/m1.jpg" alt="Denim Jeans" style="width:100%">
          <h3>Tailored Jeans</h3>
          <p class="price">$19.99</p>
          <p>Some text about the jeans..</p>
          <p><button class="addToCart" name="addCart">Add to Cart</button></p>
        </div>
        </div>
    </div>
    <div style="background-color: #eee;">

        <center><p class="page"><button class="btn btn-primary" onclick="toPage1()">1</button>
            <button class="btn btn-primary" onclick="toPage2()">2</button>
        </p></center>
    </div>



<?php
    include_once 'includes/footer.php';
    ?>
<script type="text/javascript">
    function toPage2(){
       document.getElementById('grid2').style.display = "grid";
       document.getElementById('grid1').style.display = "none"; 
    }

    function toPage1(){
       document.getElementById('grid1').style.display = "grid";
       document.getElementById('grid2').style.display = "none"; 
    }
</script>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>