<?php
require('connection.php');
$id = $_GET['id'];
$sql = "DELETE FROM local WHERE id= {$id} limit 1";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	header('location: product_list.php?status=success');
} else {
    echo "Error deleting record: " . $conn->error;
}
?>