<?php
  require_once('model/db-connect.php');
  require_once('model/product.php');
  require_once('header-style-only.php');
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = getProduct($id);
  } else {
    echo "Neįvestas prekės id!";
  }
 ?>
 <form class="" action="edit-product.php" method="post">
   <p>db id</p>
   <input class='bg-secondary' type="text" name="id" value="<?php echo "{$product['id']}"; ?>" readonly><br>
   <p>Antraštė</p>
   <input class='col-2' type="text" name="name" value="<?php echo "{$product['name']}"; ?>"><br>
   <p>Aprašymas</p>
   <textarea name="description" rows="8" cols="80"><?php echo "{$product['description']}"; ?></textarea><br>
   <p>Dydis</p>
   <input type="text" name="size" value="<?php echo "{$product['size']}"; ?>"><br>
   <p>Nuotraukos faio pradzia</p>
   <input type="text" name="img_name" value="<?php echo "{$product['img_name']}"; ?>"><br>
   <p>Tipas</p>
   <select class="" name="type">
     <option value="Pasaulio" <?php if ($product['type'] == "Pasaulio") {echo "selected";} ?>>Pasaulio</option>
     <option value="Europos" <?php if ($product['type'] == "Europos") {echo "selected";} ?>>Europos</option>
     <option value="Lietuvos" <?php if ($product['type'] == "Lietuvos") {echo "selected";} ?>>Lietuvos</option>
   </select>
   <p>Kaina</p>
   <input type="text" name="price" value="<?php echo "{$product['price']}"; ?>"><br>
   <p>Kiekis sandėlyje</p>
   <input type="text" name="quantity" value="<?php echo "{$product['quantity']}"; ?>"><br>
   <input type="submit" name="" value="Edit">
 </form>

<hr><a href='control-panel.php'>Grįžti į prekių sąrašą</a>
