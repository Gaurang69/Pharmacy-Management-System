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
$viewsql= " CREATE OR REPLACE VIEW stock_view AS SELECT stock_id,drug_name,category,status FROM stock";

 $sql = "SELECT * from stock_view";
$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<br> ID: " . $row['stock_id'].
					"<br>Name: " . $row['drug_name']. 
					"<br> Category: " . $row['category'].
					"<br> Status: " . $row["status"].
					"<br /><hr /><br /> ";
				}
			}
			else {
				echo "0 results";
			}
			$conn->close();

?>

<a href="../admin.php">click here</a> to go back