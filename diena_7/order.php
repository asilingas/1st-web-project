<?php
require_once('model/db-connect.php');
require_once('model/product.php');
require_once('model/shipping.php');
require_once('header.php');
require_once('main-bar.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$item = getProduct($id);
$item_name = $item['name'];
if (isset($_GET['sid'])) {
  $sid = $_GET['sid'];
}
$shipping = getShipping($sid);
echo "<div class='container'>";
echo "<p><strong>Prekė:</strong> {$item['name']} <strong>{$item['price']} €</strong></p>";
echo "<p><strong>Siuntimas:</strong> {$shipping['name']} <strong>{$shipping['price']} €</strong></p>";
$payment = $item['price'] + $shipping['price'];
echo "<p>Viso: <strong>$payment €</strong></p>";
?>
<form name="orderForm" action="success.php" onsubmit="return validateOrder()" method="post">
  <input type="hidden" name="total_price" value="<?php echo "$payment"; ?>">
  <input type="hidden" name="shipping_id" value="<?php echo "$sid"; ?>">
  <input type="hidden" name="product_id" value="<?php echo "$id"; ?>">
  <input type="hidden" name="item_name" value="<?php echo "$item_name"; ?>">
  <input type="hidden" name="shipping_name" value="<?php echo "{$shipping['name']}"; ?>">
  <div class="form-group row">
    <div class="col">
      <input type="text" name="email" placeholder="Jūsų el. paštas">
      <input type="text" name="email1" placeholder="Pakartoti el. paštą">
    </div>
  </div>
  <div class="form-group row">
    <div class="col">
      <input type="text" name="name" placeholder="Vardas">
      <input type="text" name="lname" placeholder="Pavardė">
    </div>
  </div>
  <div class="form-group row">
    <div class="col">
      <input type="text" name="address" placeholder="Adresas">
      <input type="text" name="postcode" maxlength="5" placeholder="Pašto kodas">
    </div>
  </div>
  <div class="form-group row">
    <div class="col">
      <input type="text" name="city" placeholder="Miestas">
      <input type="text" name="tel" placeholder="Telefono numeris">
    </div>
  </div>
  <div class="form-group row">
    <input class="btn btn-sm btn-primary ml-5" type="submit" value="PATVIRTINTI UŽSAKYMĄ">
  </div>
</form>
<?php
echo "</div>";
require_once('footer.php');
 ?>
