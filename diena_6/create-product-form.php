<form action="create-product.php" method="post">
  <p>Antraštė</p>
  <input type="text" name="name"><br>
  <p>Aprašymas</p>
  <textarea name="description" rows="8" cols="80"></textarea><br>
  <p>Dydis</p>
  <input type="text" name="size"><br>
  <p>Nuotraukos failo pradzia</p>
  <input type="text" name="img_name"><br>
  <p>Tipas</p>
  <select class="" name="type">
    <option value="Pasaulio">Pasaulio</option>
    <option value="Europos">Europos</option>
    <option value="Lietuvos">Lietuvos</option>
  </select>
  <p>Kaina</p>
  <input type="text" name="price"><br>
  <p>Kiekis sandėlyje</p>
  <input type="text" name="quantity"><br><br>
  <input type="submit" name="" value="Kurti prekę">
</form>
