<?php
  require_once('model/db-connect.php');
  require_once('model/product.php');

  if (isset($_POST['id'], $_POST['name'], $_POST['description'],  $_POST['size'], $_POST['type'], $_POST['price'], $_POST['quantity'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $size = $_POST['size'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    editProduct($id, $name, $description, $price, $size, $type, $quantity);
  } else {
    echo "Prekė neatnaujinta! Yra neužpildytų laukų!";
  }
  echo "<hr>";
  echo "<a href='edit-product-form.php?id={$id}'>Atnaujinti prekę dar kartą</a>";
  echo "<br>";
  echo "<a href='product-list.php'>Grįžti į prekių sąrašą</a>";
?>
