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

	</style>

</head>
<body>
<div class="container-fluid f3">
	
<form class = "form-container" method = "POST" action="includes/view_stock.php">
	<label> Click to view all stocks</label>
	<br>
	<input type="submit" value ="View All Stocks" name="view_stock">
</form>

<hr>

<form class = "form-container" method = "POST" action="includes/view_stock_views.php">
	<label> Click to view all stocks(<i>limited info</i>)</label>
	<br>
	<input type="submit" value ="View short info" name="view_stock_views">
</form>


	<hr>
<form class = "form-container" method = "POST" action="includes/add_stock.php">
	<label>Add A Stock</label>
	<br>
	<input type="text" placeholder="Name" name="drug_name">
	<input type="text" placeholder="Category" name="category">
	<input type="textarea" placeholder="Description" name="description">
	<input type="text" placeholder="Company" name="company">
	<input type="text" placeholder="Supplier" name="supplier">
	<input type="text" placeholder="Quantity" name="quantity">
	<input type="text" placeholder="Cost" name="cost">
	<input type="text" placeholder="Status" name="status">
	<input type="text" placeholder="Supply Date" name="date_supplied">

	<input type="submit" placeholder="Add Stock">

</form>
<hr />


<form method="POST" action="includes/searchstock.php">
	<label>Search Stock</label>
	<br>
			<input type="textarea" placeholder="Name" name="search" />
			<input type="submit" value="Submit">
</form>
<hr>

<form method="POST" action="includes/remove_stock.php">
	<label>Remove Stock(s)</label>
	<br>
			<input type="textarea" placeholder="Name" name="search_delete" />
			<input type="submit" value="Delete">
</form>
<hr>

<form class = "form-container" method = "POST" action="includes/update_stock.php">
	<label>Update A Stock</label>
	<br>
	<input type="text" placeholder="Which stock to update?" name="update_name">
	

	<input type="submit" placeholder="Add Stock">

</form>


</div>
</body>
</html>
