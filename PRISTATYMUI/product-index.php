<?php
require_once('model/db-connect.php');
require_once('model/product.php');
echo "<div class='container'>";
$products = getProducts();
for ($i=0; $product = mysqli_fetch_assoc($products); $i++) {
  if ($i == 3) {
    break;
  }
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
