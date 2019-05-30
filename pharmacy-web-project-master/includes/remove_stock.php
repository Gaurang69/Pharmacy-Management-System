<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pharmacy";
$stock = $_POST["search_delete"];
//create conn
$conn = new mysqli($servername, $username, $password, $db_name);
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "DELETE FROM stock WHERE drug_name LIKE '%" .$stock. "%'";
$result = $conn->query($sql);
if ($result) {
				echo "stock(s) deleted successfully";
			}
			else {
				echo "Failed to delete stock(s)";
			}
			$conn->close();

?>
<a href="../admin.php">click here</a> to go back