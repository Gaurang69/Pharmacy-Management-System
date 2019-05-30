<?php

include 'dbh.inc.php';
	$sql = "SELECT * FROM user";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["id"]." | " . $row["fname"]. " | " . $row["lname"]." | " . $row["email"]. " | " . $row["mobile"]."<br>";
    }
} else {
    echo "0 results";
}

