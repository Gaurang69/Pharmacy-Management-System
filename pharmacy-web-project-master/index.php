<?php
	session_start();
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Medilite</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link type="text/css" href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/navfooter.css">
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
};

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
};
</script>
<script type="text/javascript">
	$(document).ready(function() {
   $("#owl-demo").owlCarousel({
    
     items : 5,
     loop  : false,
     margin : 10,
     nav    : false,
     smartSpeed :900,
     
   });


  $("#owl-demo1").owlCarousel({
     
     items : 5,
     loop  : true,
     margin : 10,
     nav    : false,
     smartSpeed :900,
     autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
     // navText : ["<button style='position: absolute;top: 40%;margin-left: -20px;display: block!IMPORTANT;left:20px;border:0px solid black;' class='btn btn-primary'><</button>","<button class='btn btn-primary' style='position: absolute;top: 40%;margin-right: -20px;display: block!IMPORTANT;right:20px;border:0px solid black;'>></button>"]
   });

 
});
	
</script>
<script>

/* Onpage linkng smooth effect */

$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});

</script>
<script type="text/javascript">
	function cartFunction(){
	alert("Item added to cart");
}
</script>

</head>
<body>
<!-- Navigation -->

<?php
include_once 'includes/header.php';
?>




<!-- Jump to top -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li class="active "data-target="#slides" data-slide-to="0"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
<div class="carousel-inner">
	<div class="carousel-item active"><img src="images/bg1.jpg">
		<!-- <div class="carousel-caption">
			<h1 class="display-2">With better user interface</h1>
			<h3>New update</h3>
			<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
			<button type="button" class="btn btn-primary btn-large">GET STARTED</button>
		</div> --></div>
	<div class="carousel-item"><img src="images/bg2.jpg"></div>
	<div class="carousel-item"><img src="images/bg3.jpg"></div>
</div>
</div>


<!--- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">​Come find the prescription medication you need at Pharmacy. Our knowledgeable and licensed specialists are ready to quickly prepare the medicines you require and answer any related questions. If you’re a new patient or need information regarding generic or OTC medicine, please get in touch and we’ll be happy to assist you.</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="#owl-demo"><button type="button" class="btn btn-outline-secondary btn-lg">Lets go.</button></a>
		</div>
	</div>
</div>

<!-- Owl carousel -->
<form>
<div id="owl-demo" class="owl-carousel owl-theme">
 <?php
      $sql = "SELECT * FROM medicines WHERE medicine_id='1'";
      $result = mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '
	<div class="item">
		<div class="card1">
		  <img src="images/m1.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>'.$row["Name"].'</h3>
		  <p class="price">'.$row["Price"].' Rs</p>
		  <p>'.$row["Benefits"].'</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>';
        ?>

	<?php
      $sql = "SELECT * FROM medicines WHERE medicine_id='2'";
      $result = mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '
	<div class="item">
		<div class="card1">
		  <img src="images/m2.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>'.$row["Name"].'</h3>
		  <p class="price">'.$row["Price"].' Rs</p>
		  <p>'.$row["Benefits"].'</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>';
        ?>
	<?php
      $sql = "SELECT * FROM medicines WHERE medicine_id='3'";
      $result = mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '
	<div class="item">
		<div class="card1">
		  <img src="images/m3.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>'.$row["Name"].'</h3>
		  <p class="price">'.$row["Price"].' Rs</p>
		  <p>'.$row["Benefits"].'</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>';
        ?>
	<?php
      $sql = "SELECT * FROM medicines WHERE medicine_id='4'";
      $result = mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '
	<div class="item">
		<div class="card1">
		  <img src="images/m4.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>'.$row["Name"].'</h3>
		  <p class="price">'.$row["Price"].' Rs</p>
		  <p>'.$row["Benefits"].'</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>';
        ?>
	<?php
      $sql = "SELECT * FROM medicines WHERE medicine_id='5'";
      $result = mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo '
	<div class="item">
		<div class="card1">
		  <img src="images/m5.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>'.$row["Name"].'</h3>
		  <p class="price">'.$row["Price"].' Rs</p>
		  <p>'.$row["Benefits"].'</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>';
        ?>
	
			<a style="margin-top: 60%" class="text-center btn btn-outline-dark btn-lg"href="product.php">View more<i class="fa fa-angle-double-right"></i></a>
	

	</div>

	<div id="owl-demo1" class="owl-carousel owl-theme">
	<div class="item">
		<div class="card1">
		  <img src="images/m6.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>Tailored Jeans</h3>
		  <p class="price">$19.99</p>
		  <p>Some text about the jeans..</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>

	<div class="item">
		<div class="card1">
		  <img src="images/m7.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>Tailored Jeans</h3>
		  <p class="price">$19.99</p>
		  <p>Some text about the jeans..</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>
	<div class="item">
		<div class="card1">
		  <img src="images/m8.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>Tailored Jeans</h3>
		  <p class="price">$19.99</p>
		  <p>Some text about the jeans..</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>
	<div class="item">
		<div class="card1">
		  <img src="images/m9.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>Tailored Jeans</h3>
		  <p class="price">$19.99</p>
		  <p>Some text about the jeans..</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>
	<div class="item">
		<div class="card1">
		  <img src="images/m10.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>Tailored Jeans</h3>
		  <p class="price">$19.99</p>
		  <p>Some text about the jeans..</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>
	<div class="item">
		<div class="card1">
		  <img src="images/tm10.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>Tailored Jeans</h3>
		  <p class="price">$19.99</p>
		  <p>Some text about the jeans..</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>
	<div class="item">
		<div class="card1">
		  <img src="images/tm10.jpg" alt="Denim Jeans" style="width:100%">
		  <h3>Tailored Jeans</h3>
		  <p class="price">$19.99</p>
		  <p>Some text about the jeans..</p>
		  <p><button name="addCart" onclick="cartFunction()">Add to Cart</button></p>
		</div>
	</div>

         
  
</div>
</form>


<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
		<h1 class="display-4">Features</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">At Metilite.com you can order the products you regularly buy from our stores from the convenience of home and pick them up from a MedPlus store near you. To start shopping, simply search for the products you wish to buy, choose the quantity and place the order.</p>
			
		</div>
	</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
	<div class="row padding text-center">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fa fa-check-square"></i>
			<h3>Assured quality</h3>
			<p>Undergoes a strict quality check by our professionals.</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fa fa-lock"></i>
			<h3>Secured Payment</h3>
			<p>Make payments for your confirmed orders through our secured gateway.</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fa fa-reply"></i>
			<h3>Efficient Return Policy</h3>
			<p>Real time order tracking available.</p>
		</div>

		
	</div>
	<hr class="my-4">
</div>

<!--- Two Column Section -->
<!-- <div class="container-fluid">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent massa purus, egestas at nisi id, vestibulum egestas leo.</p>
			<p> Donec faucibus lorem elit, ac sollicitudin justo bibendum ac. Vestibulum in velit dapibus, sodales turpis at, cursus purus.</p>
			<p>Suspendisse neque nisl, lobortis quis neque ut, pellentesque pharetra odio.</p>
			<br>
		<a href="#shop"><button type="button" class="btn btn-primary">Click Me</button></a>
		</div>
		<div class="col-lg-6">
			<img src="images/desk.png" class="img-fluid">
		</div>

		 
	</div>
</div>
<hr class="my-4"> -->


<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed"></div>
		
	</div>
</figure>


<!--- Emoji Section -->
<!-- <button class="fun btn-warning btn-outline-secondary" data-toggle="collapse" data-target="#emoji" >Click 4 fun</button>
<div id="emoji" class="collapse">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="images/gif/panda.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="images/gif/poo.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="images/gif/unicorn.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="images/gif/chicken.gif">
			</div>
		</div>
	</div>
	
</div>
<hr class="my-4"> -->
  
<!--- Meet the team -->
<div class="container-fluid padding" id ="team">
	<div class="row text-center">
		<div class="col-md-12">
		<h2 class="display-4 font-weight-bold">Meet the team</h2><br>
		
		</div>
	</div>
	
</div>
<!--- Cards -->
<div class="container-fluid padding">
	<div class="row text-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-img-top">
					<img class="img-fluid"  src="images/team1.png">
				</div>
				<div class="card-body">
					<h1 class="card-title">Saurav</h1>
					<p class="card-text">This guy here is the coolest.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div  class="card-img-top">
					<img class="img-fluid" src="images/team2.png">
				</div>
				<div class="card-body">
					<h1 class="card-title">Pratik</h1>
					<p class="card-text">This guy here knows Bootstrap.</p>
				</div>
			</div>
		</div>	
		<div class="col-md-4">
			<div class="card">
				<div class="card-img-top">
					<img class="img-fluid" src="images/team3.png">
				</div>
				<div class="card-body">
					<h1 class="card-title">Gaurang</h1>
					<p class="card-text">This guy here knows CSS3.</p>
				</div>
			</div>
			<br>
		</div>		
	</div>
</div>

<!-- About us -->
<div class="container-fluid padding about" id="about">
	<div class="row welcome text-center">
		<div class="col-12">
		<h1 class="display-4 font-weight-bold">About Us</h1>
		</div>
		<hr>
		<div class="col-12">
			<br>
			<h2>The Care you Deserve</h2><br>
			<p>​We care about the well-being of each customer who walks through our doors. That’s s why we’ve dedicated so much time to ensuring we stock the widest range of medical products, offer the highest quality health services, and retain the best staff possible.</p><br>
			<p>As a middleman between your doctor’s prescriptions and your own well being, we strive to provide personalized and professional attention, as well as medication management protocols that inspire customers to seek out the medications and advice they need in order to get better. Trust our Pharmacy to provide you with the care you deserve.</p>			
			<br>
		</div>
	</div>
</div>

<!-- Contact Us -->
<section class="container-fluid field" id="contact">
	<div class="contact">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="includes/mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <button class="btn btn-primary btn-lg" onclick="document.getElementById('contact-form').submit();">Send</button>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>Mumbai, Maharashtra</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>022 24033993</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>contact@medilite.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->
    </div>
</div>
</section>


<!--- Connect -->
<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2 class="display-4 font-weight-bold">Connect to us</h2>
								
			</div>
			
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
			
	</div>
</div>




<!--- Footer -->
<?php
include_once 'includes/footer.php';

?>


</body>
</html>













