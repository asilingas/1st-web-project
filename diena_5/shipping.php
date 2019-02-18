<?php
require_once('model/db-connect.php');
require_once('model/product.php');
require_once('model/shipping.php');
$shippingList = getShippingList();
while ($shipping = mysqli_fetch_assoc($shippingList)) {
  echo "<h2>{$shipping['name']}</h2>";
  echo "<p>{$shipping['description']}</p>";
  if ($shipping['duration'] != 0) {
    echo "<p>Pristatymas užtruks {$shipping['duration']} dienas</p>";
  } else {
    echo "<p>Pasiimti galima užsakymo dieną</p>";
  }
  echo "<h3>{$shipping['price']} €</h3>";
  echo "<a href='order.php?id={$_GET['id']}&sid={$shipping['id']}'>TĘSTI</a>";
}
 ?>
