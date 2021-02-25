<?php
require('connection.php');

   if(isset($_POST['add_product'])){
	$name=$_POST['name'];
	$barcode=$_POST['barcode'];
	$price=$_POST['price'];
	
	$sql = "INSERT INTO local (name, barcode, price)
VALUES ('$name', '$barcode', $price)";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   }
   }else {
	header('location:add_form.php');
   }
   ?>
