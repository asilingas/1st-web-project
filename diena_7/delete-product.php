<?php
require_once('model/db-connect.php');
require_once('model/product.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  deleteProduct($id);
  header("Location: control-panel.php");
} else {
  echo "id:$id prekė neegzistuoja.";
}
