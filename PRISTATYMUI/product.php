<?php
require_once('model/db-connect.php');
require_once('model/product.php');
require_once('header.php');
require_once('main-bar.php');
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
echo "<div class='container'>";
if (isset($_GET['type'])) {
  if ($_GET['type'] == "Pasaulio") {
    $type = "Pasaulio";
    $products = getProductsByType($type);
    echo "<h2 class='text-center m-3'>Pasaulio žemėlapiai</h2>";
  }
  elseif ($_GET['type'] == "Europos") {
    $type = "Europos";
    $products = getProductsByType($type);
    echo "<h2 class='text-center m-3'>Europos žemėlapiai</h2>";
  }
  elseif ($_GET['type'] == "Lietuvos") {
    $type = "Lietuvos";
    $products = getProductsByType($type);
    echo "<h2 class='text-center m-3'>Lietuvos žemėlapiai</h2>";
  }
  } else {
    echo "<h2 class='text-center m-3'>Visi žemėlapiai</h2>";
    $products = getProducts();
  }
// while ($product = mysqli_fetch_assoc($products)) {
//   $i = 0;
//   $i++;
//
//   echo "<p>id:{$product['id']}</p>";
//   echo "<h2>{$product['name']}</h2>";
//   echo "<p>{$product['description']}</p>";
//   echo "<p>Dydis:{$product['size']} Tipas:{$product['type']}</p>";
//   echo "<h4>{$product['price']} €</h4>";
//   echo "<a href='cart.php?id={$product['id']}'>PIRKTI</a>";
//   echo "<hr>";
// }

//PAKEISTA Į FOR CIKLĄ DĖL AIŠKESNIO IF SĄLYGŲ STULPELIAMS
for ($i=0; $product = mysqli_fetch_assoc($products); $i++) {
  if ($i % 3 == 0) {
    echo "<div class='card-deck'>";
  }
  echo "<div class='card'>
          <img class='card-img-top' src='img/products/{$product['img_name']}-30x40-400x400.jpg' alt='{$product['img_name']}'>
          <div class='card-body'>
            <h5 class='card-title'>{$product['name']}</h5>
            <p class='card-text'>{$product['size']} cm</p>
            <p class='h5'>{$product['price']} €</p>
          </div>
          <div class='card-footer'>
            <a href='cart.php?id={$product['id']}'><button class='btn btn-lg btn-primary'>Detaliau</button></a>
          </div>
          </div>";
  if ($i % 3 == 2) {
    echo "</div>";
  }
}
echo "</div>";
require_once('footer.php'); ?>
