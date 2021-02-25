<?php
require('connection.php');
$id = intval($_GET['id']);

if($id > 0){
	header('location: product_list.php');
}

if( isset($_POST['edit_product'])){
	$name = $_POST['name'];
	$barcode = $_POST['barcode'];
	$price = $_POST['price'];

	$sql = "UPDATE local
			SET name = '$name', 
			barcode = '$barcode', 
			price = $price
			WHERE id = $id 
			LIMIT 1";

	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully.";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
} else {
	header('location:product_list.php');
}
?>