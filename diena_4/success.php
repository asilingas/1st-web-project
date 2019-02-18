<?php
require_once('model/db-connect.php');
require_once('model/order.php');
if (isset($_POST['name'], $_POST['lname'], $_POST['email'], $_POST['address'], $_POST['postcode'], $_POST['city'], $_POST['shipping_id'], $_POST['total_price'])) {
  $name = $_POST['name'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $postcode = $_POST['postcode'];
  $city = $_POST['name'];
  $shipping_id = $_POST['shipping_id'];
  $total_price = $_POST['total_price'];
  $order_true = createOrder($name, $lname, $email, $address, $postcode, $city, $shipping_id, $total_price);
  if ($order_true) {
    getOrder();
  }
}


 ?>
