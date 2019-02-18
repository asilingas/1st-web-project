<?php
require_once('model/db-connect.php');
require_once('model/product.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  deleteProduct($id);
} else {
  echo "id:$id prekė neegzistuoja.";
}
echo "<hr>";
echo "<a href='productList.php'>Grįžti į prekių sąrašą</a>";
