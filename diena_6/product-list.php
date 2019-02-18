<?php
require_once('model/db-connect.php');
require_once('model/product.php');
require_once('header-style-only.php');
//LINK TO CREATE PRODUCT
echo "<a class='btn bg-success' href='create-product-form.php'><h4>NAUJOS PREKĖS KŪRIMAS</h4></a><hr>";
//LIST OF PRODUCTS
$products = getProducts();
while ($product = mysqli_fetch_assoc($products)) {
  echo "<div class='row'>
  <div class='col text-centered'>
  {$product['name']} <a class='btn bg-warning' href='edit-product-form.php?id={$product['id']}'>Keisti</a>
  <a class='btn bg-danger' href='delete-product.php?id={$product['id']}'>Pašalinti</a></div></div>";
  echo "<br>";
}
require_once('footer-scripts-only.php');
