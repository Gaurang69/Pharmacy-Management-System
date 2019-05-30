<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pharmacy";
$drug_name = $_POST["update_name"];


$conn = new mysqli($servername, $username, $password, $db_name);
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT * FROM stock WHERE drug_name LIKE '%" .$drug_name. "%'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<br> ID: " . $row['stock_id'].
					"<br>Name: " . $row['drug_name']. 
					"<br> Category: " . $row['category']. 
					"<br> Description: " . $row["description"]. 
					"<br> Company: " . $row["company"]. 
					"<br> Supplier: " . $row["supplier"]. 
					"<br> Quantity: " . $row["quantity"]. 
					"<br> Cost: " . $row["cost"]. 
					"<br> Status: " . $row["status"]. 
					"<br> Supply Date: " . $row["date_supplied"]. 
					"<br /><hr /><br /> ";
				}
			}
			
			else {
				echo "0 results";
			}
			?>
	<form method="POST" action="update2.php">
	<label>Enter the id of stock you want to update</label>
	<input type="text" placeholder="ID " name="id" required ">
	<input type="text" placeholder="Name" name="drug_name" required >
	<input type="text" placeholder="Category" name="category" required >
	<input type="textarea" placeholder="Description" name="description" required >
	<input type="text" placeholder="Company" name="company" required>
	<input type="text" placeholder="Supplier" name="supplier" required>
	<input type="text" placeholder="Quantity" name="quantity" required>
	<input type="text" placeholder="Cost" name="cost" required>
	<input type="text" placeholder="Status" name="status" required>
	<input type="text" placeholder="Supply Date" name="date_supplied" required>
	<input type="submit" value="Submit">
</form>;

