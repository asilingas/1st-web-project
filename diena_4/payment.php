<?php
require_once('model/db-connect.php');
require_once('model/product.php');
require_once('model/shipping.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$item = getProduct($id);
if (isset($_GET['sid'])) {
  $sid = $_GET['sid'];
}
$shipping = getShipping($sid);
echo "<p>Prekė: {$item['name']} <strong>{$item['price']} €</strong></p>";
echo "<p>Siuntimas: {$shipping['name']} <strong>{$shipping['price']} €</strong></p>";
$payment = $item['price'] + $shipping['price'];
echo "<p>Viso: <strong>$payment €</strong></p>";
echo "<hr>";
echo "<p>Pinigus pervesti į sąskaitą LT00 4444 2222 1111 8888</p>";
echo "<p>Mokėjimo paskirtyje nurodyti užsakymo numerį: </p>";
?>
