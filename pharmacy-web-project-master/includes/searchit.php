<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "mydb1";
#$stock = $_POST["view_stock"];
//create conn
$conn = new mysqli($servername, $username, $password, $db_name);
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 $sql = "SELECT * from medicines";
$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<br> ID: " . $row['medicine_id'].
					"<br>Name: " . $row['Name']. 
					"<br> Commpany: " . $row['Company_name']. 
					"<br> Batch no.: " . $row["Batch_No"]. 
					"<br> Price: " . $row["Price"]. 
					"<br> Category: " . $row["Category"]. 
					"<br> Directions of Use: " . $row["Direction_of_use"]. 
					"<br> Description: " . $row["Description"]. 
					"<br> Benefits: " . $row["Benefits"]. 
					"<br> Expiry: " . $row["Exp_date"]. 
					"<br /><hr /><br /> ";
				}
			}
			else {
				echo "0 results";
			}
			$conn->close();

?>