<?php
require_once('model/db-connect.php');
require_once('model/product.php');
require_once('model/shipping.php');
require_once('header.php');
require_once('main-bar.php');
$shippingList = getShippingList();
echo "<div class='container'><div class='row'><div class='col'>
      <p class='h2 text-center'>Išsirinkite siuntimo būdą</p>
      </div></div>
      <div class='row'>";
while ($shipping = mysqli_fetch_assoc($shippingList)) {
  echo "<div class='col'>
  <p class='h3'>{$shipping['name']}</p>
  <p class=''>{$shipping['description']}</p>";
  if ($shipping['duration'] != 0) {
    echo "<p>Pristatymas užtruks {$shipping['duration']} dienas</p>";
  } else {
    echo "<p>Pasiimti galima užsakymo dieną</p>";
  }
  echo "<p><strong>{$shipping['price']} €</strong></p>
  <a href='order.php?id={$_GET['id']}&sid={$shipping['id']}'><button class='btn btn-primary mb-2'>TĘSTI PIRKIMĄ</button></a></div>";
}

echo "</div></div>"; //uzdarom container ir row
require_once('footer.php');
