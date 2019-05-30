<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pharmacy";
			$stock = $_POST["search"];
			// Create connection
			$conn = new mysqli($servername, $username, $password, $db_name);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
		
			$sql = "SELECT * FROM stock WHERE drug_name LIKE '%" .$stock. "%'";
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
			$conn->close();
		?>
		<a href="../admin.php">click here</a> to go back