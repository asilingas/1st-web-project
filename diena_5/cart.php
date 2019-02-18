<?php
require_once('model/db-connect.php');
require_once('model/product.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$item = getProduct($id);
echo "{$item['name']} {$item['price']} € ";
echo "<a href='shipping.php?id=$id'>TĘSTI</a>";
 ?>
