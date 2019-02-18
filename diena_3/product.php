<?php
  require_once('model/db_connect.php');
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
  $products = getProducts(10);
  while ($product = mysqli_fetch_assoc($products)) {
    echo "<p>id:{$product['id']}</p>";
    echo "<h2>{$product['name']}</h2>";
    echo "<p>{$product['description']}</p>";
    echo "<p>Dydis:{$product['size']} Tipas:{$product['type']}</p>";
    echo "<h4>{$product['price']}€</h4>";
    echo "<hr>";
  }

  

 ?>
