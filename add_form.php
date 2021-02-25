<html>
<body>
<h1>project php</h1>
<form action="insert.php" method="POST">

name: <input type="text" name="name" required><br><br>
barcode: <input type="text" name="barcode" required><br><br>
price: <input type="number" name="price" required step="0.01"><br><br>

<input type="submit" name="add_product">
</form>
</body>
</html>