<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pharmacy";
#$stock = $_POST["view_stock"];
//create conn
$conn = new mysqli($servername, $username, $password, $db_name);
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 $sql = "SELECT * from stock";
$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "Name: " . $row['drug_name']. 
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