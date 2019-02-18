<?php
  require_once('model/db-connect.php');
  require_once('model/product.php');

  //----VIENAM PRODUKTUI SU ID---------------

  // $id = $_GET['id'];
  // $product = getProduct($id);
  // echo "<p>id:{$product['id']}</p>";
  // echo "<h2>{$product['name']}</h2>";
  // echo "<p>{$product['description']}</p>";
  // echo "<p>Dydis:{$product['size']} Tipas:{$product['type']}</p>";
  // echo "<h4>{$product['price']}€</h4>";
  // echo "<hr>";

  //-----PRODUKTU SARASO ATVAIZDAVIMAS------------
  $products = getProducts();
  while ($product = mysqli_fetch_assoc($products)) {
    echo "<p>id:{$product['id']}</p>";
    echo "<h2>{$product['name']}</h2>";
    echo "<p>{$product['description']}</p>";
    echo "<p>Dydis:{$product['size']} Tipas:{$product['type']}</p>";
    echo "<h4>{$product['price']} €</h4>";
    echo "<a href='cart.php?id={$product['id']}'>PIRKTI</a>";
    echo "<hr>";
  }



 ?>
