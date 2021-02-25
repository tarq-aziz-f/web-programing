<html>
<style>
table, table th, table td{
	border:1px solid black;
    padding:5px;
}
</style>
<body>
<?php 
if( isset($_GET['status']) && $_GET['status'] === "success") {
	echo "Operation was successful!";
}
?>
<div>
<table id="customers">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Barcode</th>
<th>Price</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>

<tbody>
<?php
require('connection.php');
$sql = "SELECT * FROM local order by price DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr>";
	   echo "<td>{$row['id']}</td>";
	   echo "<td>{$row['name']}</td>";
	   echo "<td>{$row['barcode']}</td>";
	   echo "<td>{$row['price']}</td>";
	  
echo "<td><a href=\"edit.php?id={$row['id']}\">Edit</a></td>";
echo "<td><a href=\"delete.php?id={$row['id']}\">X</a></td>";
	
	   echo"</tr>";
    }
} else {
    echo "0 results";
}
	?>
</tbody>
</table>
</div>
</body>
</html>