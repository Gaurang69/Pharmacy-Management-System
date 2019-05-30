<!-- Navigation -->
<nav class="navbar-expand-md" id = back>
	<div class="container-fluid logo"><a class="navbar-brand" href="#"><img src="images/logo5.png "></a>
	
	</div>
	<div class="navbar-dark" id="nav-main">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<div class="container1" onclick="myFunction(this)">
		  <div class="bar1"></div>
		  <div class="bar2"></div>
		  <div class="bar3"></div>
		</div>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="product.php">Shop</a></li>
				<li class="nav-item"><a class="nav-link" href="index.php#team">Team</a></li>
				<li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
				<li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>

							    
  </li>
				<?php
					if(isset($_SESSION['curr_id'])) {
						echo '<li class="nav-item dropdown"><a class="btn nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" id="dropdownMenuLink" role="button" href="#">'.$_SESSION['curr_fname'].'<i class="fa fa-user-circle"></i></a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="profile.php">Profile</a>
					    <a class="dropdown-item" href="#">Orders</a>
					    <a class="dropdown-item" href="includes/logout.inc.php">Logout</a>
					    </div></li>';			

					}

					else{						
						echo '<li class="nav-item dropdown"><a class="btn nav-link dropdown-toggle" id="dropdownMenuLink"  data-toggle="dropdown" data-hover="dropdown" role="button" href="#">User<i class="fa fa-user-circle"></i></a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="login.php">Login</a>
					    <a class="dropdown-item" href="register.php">New User</a>
					    <a class="dropdown-item" href="admin.php">Staff</a>
					    </div></li>';
					}
				?>
				<li class="nav-item"><a class="nav-link" href="pay.php"><i class="fa fa-shopping-cart"></i></a></li>
				<li>
					<form class="form-container" id="search" method="POST" action="includes/searchit.php">
						<div class="form-row">
							<div class="col">
                 			<input type="text" name="searchit" class="form-control" placeholder="Search">
                 		</div>
                 			<div class="col">
                			<input type="submit" style= "width:100px;" value="Search">
                		</div>
                		</div>
      				</form>
				</li>
			</ul>
		</div>		
	</div>
</nav>

<script type="text/javascript">function myFunction(x) {
    x.classList.toggle("change");
}
</script>