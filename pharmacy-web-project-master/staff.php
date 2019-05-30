<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Staff</title>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">

<style type="text/css">
	
	.f3{
		margin-top: 100px;
	}

	.fa-check-square , .fa-plus-square, .fa-minus-square{
		color: lightblue;
		font-size: 4.2rem;
		padding-right: 10px;
	}

	.close{
		display: none;
	}
	.show{
		display: block;
	}
</style>
<script type="text/javascript">
	function myFunction(){
		// document.getElementById('disp_stock').classList.toggle("show");
	}
</script>
</head>
<body>
<div class="container-fluid f3">
	
<form class = "form-container" method = "POST">
  <p><i class="fa fa-check-square"></i><button id="btn1"  name="viewstock" class="btn btn-outline-dark btn-lg" onclick="myFunction()">View Stock</button></p>

<div id="disp_stock" class="close"> 
<?php
if(isset($_POST['viewstock'])){
include_once 'includes/dbh.inc.php';
$result = mysqli_query($conn,"SELECT * FROM stock");

echo "<table class='table table-responsive table-stripped table-justified'>
<thead class='thead-dark'>
<tr>
<th>stock_id</th>
<th>stock_name</th>
<th>supplier_id</th>
<th>Quantity</th>
</tr>
</thead>
<tbody>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['stock_id'] . "</td>";
echo "<td>" . $row['stock_name'] . "</td>";
echo "<td>" . $row['supplier_id'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($conn);
}
?>

</div> 
<label>Stock name :</label>
	<input type="text" name="stock_name">
	<label>Supplier id :</label>
	<input type="number" name="supplier_id">
	<label>Quantity :</label>
	<input type="number" name="quantity">
  <p><i class="fa fa-plus-square"></i><button name="addstock" class="btn btn-outline-dark btn-lg">Add Stock</button></p>
  
  <p><i class="fa fa-minus-square"></i><button name="removestock" class="btn btn-outline-dark btn-lg">Remove Stock</button></p>

  </div>
  
  	<p><i class="fa fa-check-square"></i><button name="viewsupplier" class="btn btn-outline-dark btn-lg">View Supplier</button></p>

  <p><i class="fa fa-plus-square"></i><button class="btn btn-outline-dark btn-lg">Add Supplier</button></p>
  <p><i class="fa fa-minus-square"></i><button class="btn btn-outline-dark btn-lg">Remove Supplier</button></p>
  </div>
  
  	<p><i class="fa fa-check-square"></i><button class="btn btn-outline-dark btn-lg">View Orders</button></p>
</div>

</div>
<script>

</script>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>				