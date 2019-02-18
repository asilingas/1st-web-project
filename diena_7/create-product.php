<?php
require_once('model/db-connect.php');
require_once('model/product.php');
if (isset($_POST['name'], $_POST['description'], $_POST['price'], $_POST['size'], $_POST['type'], $_POST['img_name'],$_POST['quantity'])) {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $size = $_POST['size'];
  $type = $_POST['type'];
  $img_name = $_POST['img_name'];
  $quantity = $_POST['quantity'];
  createProduct($name, $description, $price, $size, $type, $img_name, $quantity);
} else {
  echo "Prekės sukurti nepavyko. Užpildyti ne visi laukai.";
}
echo "<hr>";
echo "<a href='control-panel.php'>Grįžti į prekių sąrašą</a>";
