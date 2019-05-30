<?php

include_once 'dbh.inc.php';

if(isset($_POST['viewsupplier'])){

$result = mysqli_query($conn,"SELECT supplier_id,name,phone,email,address FROM supplier");

echo "<table class='table table-responsive table-stripped table-justified'>
<thead class='thead-dark'>
<tr>
<th>supplier_id</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
</tr>
</thead>
<tbody>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['supplier_id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
}
echo "</tbody></table>";

mysqli_close($conn);
}
?>