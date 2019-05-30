<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pharmacy";

$id = $_POST["id"];
$drug_name = $_POST["drug_name"];
$category = $_POST["category"];
$description = $_POST["description"];
$company = $_POST["company"];
$supplier = $_POST["supplier"];
$quantity = $_POST["quantity"];
$cost = $_POST["cost"];
$status = $_POST["status"];
$date_supplied = $_POST["date_supplied"];

$conn = new mysqli($servername, $username, $password, $db_name);
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "UPDATE stock SET 
drug_name ='$drug_name',
category = '$category',
description = '$description',
company = '$company',
supplier = '$supplier',
quantity = '$quantity',
cost = '$cost',
status = '$status' WHERE stock_id='$id'";

//$sql = "INSERT INTO `stock`(`stock_id`, `drug_name`, `category`, `description`, `company`, `supplier`, `quantity`, `cost`, `status`, `date_supplied`) VALUES ('$id','$drug_name','$category','$description','$company','$supplier','$quantity','$cost','$status','$date_supplied')";

$result = $conn->query($sql);
if ($result) {
				echo "stock updated successfully";
			}
			else {
				echo "Failed to update stock";
			}
			$conn->close();
?>
<a href="../admin.php">click here</a> to go back