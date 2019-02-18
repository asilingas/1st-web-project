<?php
require_once('model/db-connect.php');
require_once('model/product.php');
require_once('model/shipping.php');
require_once('model/order.php');
require_once('model/contacts.php');
require_once('header-style-only.php');
//LINK TO CREATE PRODUCT
echo "<div class='fluid-container'>
<div class='row'>
<div class='col'>
<h1 class='text-center'>PREKĖS</h1>
<a class='btn bg-success m-5' href='create-product-form.php'><h4>NAUJOS PREKĖS KŪRIMAS</h4></a>";
//LIST OF PRODUCTS
$products = getProducts();
while ($product = mysqli_fetch_assoc($products)) {
  echo "<div class='row'>
  <div class='col text-centered'>
  {$product['name']} <a class='btn bg-warning' href='edit-product-form.php?id={$product['id']}'>Keisti</a>
  <a class='btn bg-danger' href='delete-product.php?id={$product['id']}'>Pašalinti</a></div></div>";
  echo "<br>";
}
echo "</div>"; // END PRODUCT COL
echo "<div class='col'>
        <h1 class='text-center'>UŽSAKYMAI</h1>";
// LIST OF ORDERS
$orders = getOrders();
while ($order = mysqli_fetch_assoc($orders)) {
  $shipping_id = $order['shipping_id'];
  $shipping_array = getShippingName($shipping_id);
  $product_id = $order['product_id'];
  $product_array = getProduct($product_id);
  echo "<div class='row'>
  <div class='col border'>
  <p><strong>Užsakymo numeris:</strong> {$order['id']} <strong>Data:</strong> {$order['date']}</p>
  <p><strong>Vardas:</strong> {$order['name']} {$order['lname']} <strong>Adresas:</strong> {$order['address']} {$order['postcode']} {$order['city']} {$order['tel']}</p>
  <p><strong>Prekė:</strong> {$product_array['name']} <strong>Pristatymo būdas:</strong> {$shipping_array['name']} </p>
  <p>Užsakymo suma: <strong>{$order['total_price']} €</strong></p>
  </div></div>";
}
echo "</div>"; // END ORDER COL
echo "<div class='col'>
        <h1 class='text-center'>KLAUSIMAI</h1>";
$questions = getQuestions();
while ($question = mysqli_fetch_assoc($questions)) {
  echo "<div class='row'>
  <div class='col border'>
  <p><strong>Vardas:</strong> {$question['name']} <strong>Email:</strong> {$question['email']} <strong>Data:</strong> {$question['date']}</p>
  <p><strong>Klausimas:</strong> {$question['comment']} </p></div></div>";

}
echo "</div>"; // END QUESTiO COL
echo "</div>"; // END ROW
echo "</div>"; // END CONTAINER
require_once('footer-scripts-only.php');
