<?php
require('connection.php');
$id = intval($_GET['id']);

if($id == 0){
	header('location: product_list.php');
}

$sql = "SELECT * FROM local where id = {$id}";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<form action="update.php?id=<?php echo $id; ?>" method="post">
Name: 
<input type="text" name="name" 
value="<?php echo $row['name']; ?>" required>
<br><br>
Barcode: 
<input type="text" name="barcode" 
value="<?php echo $row['barcode']; ?>" required>
<br><br>
Price: 
<input type="number" name="price" 
value="<?php echo $row['price']; ?>" required step="0.01">
<br><br><br>
<input type="submit" name="edit_product" value="Update">
</form>