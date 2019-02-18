<?php
require_once('model/db-connect.php');
require_once('model/product.php');
//LINK TO CREATE PRODUCT
echo "<h2><a href='createProductForm.php'>NAUJOS PREKĖS KŪRIMAS</a></h2><hr>";
//LIST OF PRODUCTS
$products = getProducts();
while ($product = mysqli_fetch_assoc($products)) {
  echo "<strong>id:{$product['id']} {$product['name']}</strong> <a href='editProductForm.php?id={$product['id']}'>KEISTI</a>";
  echo "<br><a href='deleteProduct.php?id={$product['id']}'>PAŠALINTI</a>";
  echo "<hr>";
}
