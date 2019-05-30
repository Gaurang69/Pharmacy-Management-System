<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pharmacy";
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

$sql = "INSERT INTO `stock`(`drug_name`, `category`, `description`, `company`, `supplier`, `quantity`, `cost`, `status`, `date_supplied`) VALUES ('$drug_name','$category','$description','$company','$supplier','$quantity','$cost','$status','$date_supplied')";


$result = $conn->query($sql);
if ($result) {
				echo "stock added successfully";
			}
			else {
				echo "Failed to add stock";
			}
			$conn->close();
		?>
<a href="../admin.php">click here</a> to go back