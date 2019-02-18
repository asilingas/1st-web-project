<?php
require_once('model/db-connect.php');
require_once('model/order.php');
require_once('model/product.php');
require_once('header.php');
require_once('main-bar.php');
echo "<div class='container'>
        <div class='row'>
        <div class='col my-5'>";
if (isset($_POST['name'], $_POST['lname'], $_POST['email'], $_POST['address'], $_POST['postcode'], $_POST['city'], $_POST['tel'], $_POST['shipping_id'], $_POST['product_id'], $_POST['total_price'])) {
  $name = $_POST['name'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $postcode = $_POST['postcode'];
  $city = $_POST['city'];
  $tel = $_POST['tel'];
  $shipping_id = $_POST['shipping_id'];
  $product_id = $_POST['product_id'];
  $total_price = $_POST['total_price'];
  $order_true = createOrder($name, $lname, $email, $address, $postcode, $city, $tel, $shipping_id, $product_id, $total_price);
  $order_id = mysqli_insert_id(getPrisijungimas());
  $item_name = $_POST['item_name'];
  $shipping_name = $_POST['shipping_name'];
  require_once('send-order-email.php');
} else {
  die("Klaida trūksta duomenų.");
}
echo "</div></div></div>"; //end container-row-col
require_once('footer.php');
