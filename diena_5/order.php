<?php
require_once('model/db-connect.php');
require_once('model/product.php');
require_once('model/shipping.php');
require_once('header.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$item = getProduct($id);
$item_name = $item['name'];
if (isset($_GET['sid'])) {
  $sid = $_GET['sid'];
}
$shipping = getShipping($sid);
echo "<p>Prekė: {$item['name']} <strong>{$item['price']} €</strong></p>";
echo "<p>Siuntimas: {$shipping['name']} <strong>{$shipping['price']} €</strong></p>";
$payment = $item['price'] + $shipping['price'];
echo "<p>Viso: <strong>$payment €</strong></p>";
echo "<hr>";
// echo "<p>Pinigus pervesti į sąskaitą LT00 4444 2222 1111 8888</p>";
// echo "<p>Mokėjimo paskirtyje nurodyti užsakymo numerį: </p>";
?>
<form class="" action="success.php" method="post">
  <input type="hidden" name="total_price" value="<?php echo "$payment"; ?>">
  <input type="hidden" name="shipping_id" value="<?php echo "$sid"; ?>">
  <input type="hidden" name="item_name" value="<?php echo "$item_name"; ?>">
  <input type="hidden" name="shipping_name" value="<?php echo "{$shipping['name']}"; ?>">
  <input type="text" name="email" value="" placeholder="Jūsų el. paštas">
  <input type="text" name="email1" value="" placeholder="Pakartoti el. paštą">
  <input type="text" name="name" value="" placeholder="Vardas">
  <input type="text" name="lname" value="" placeholder="Pavardė">
  <input type="text" name="address" value="" placeholder="Adresas">
  <input type="number" name="postcode" value="" placeholder="Pašto kodas">
  <input type="text" name="city" value="" placeholder="Miestas">
  <input type="text" name="tel" value="" placeholder="Telefono numeris">
  <input type="submit" name="" value="Patvirtinti">
</form>
<?php require_once('footer.php');
 ?>
