<?php
require_once('model/db-connect.php');
require_once('model/search.php');
require_once('header.php');
if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $products = getProductSearch($search);
  $productCount = mysqli_num_rows($products);
  if ($productCount == 0) {
    echo "<p>Prekių pagal raktažodį <strong>$search</strong> rasta nebuvo.</p>";
  } else {
    echo "<p>Rasta prekių: <strong>$productCount<strong></p>";
    while ($product = mysqli_fetch_assoc($products)) {
      echo "<h2>{$product['name']}</h2>";
      echo "<p>{$product['description']}</p>";
      echo "<p>Dydis:{$product['size']} Tipas:{$product['type']}</p>";
      echo "<h4>{$product['price']} €</h4>";
      echo "<a href='cart.php?id={$product['id']}'>PIRKTI</a>";
      echo "<hr>";
  }
  }
} else {
  echo "<p>Paieškos laukas nebuvo užpildytas.</p>";
}
echo "<a href='index.php'>Grįžti į pradžią</a>";
require_once('footer.php');
