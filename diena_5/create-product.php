<?php
require_once('model/db-connect.php');
require_once('model/product.php');
if (isset($_POST['name'], $_POST['description'], $_POST['price'], $_POST['size'], $_POST['type'], $_POST['quantity'])) {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $size = $_POST['size'];
  $type = $_POST['type'];
  $quantity = $_POST['quantity'];
  createProduct($name, $description, $price, $size, $type, $quantity);
} else {
  echo "Prekės sukurti nepavyko. Užpildyti ne visi laukai.";
}
echo "<hr>";
echo "<a href='product-list.php'>Grįžti į prekių sąrašą</a>";
