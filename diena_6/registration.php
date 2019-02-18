<?php
require_once('header.php');
require_once('main-bar.php');
?>
<main class="container">
  <form name="registrationForm" action="create-user.php" onsubmit='return validateRegister()' method="post">
    <div class="row">
      <div class="col text-center">
        <h2>Registracija Projektas.lt</h2>
      </div>
    </div>
    <div class="form-group row">
      <div class="col text-center">
        <input type="text" name="email" value="" placeholder="Elektroninis paštas">
      </div>
    </div>
    <div class="row">
      <div class="form-group col text-center">
        <input type="password" name="password" value="" placeholder="Slaptažodis">
        <input type="password" name="password1" value="" placeholder="Pakartoti slaptažodį">
      </div>
    </div>
    <div class="row">
      <div class="form-group col text-center">
        <input type="text" name="name" value="" placeholder="Vardas">
        <input type="text" name="lname" value="" placeholder="Pavardė">
      </div>
    </div>
    <div class="row">
      <div class="form-group col text-center">
        <input type="text" name="address" value="" placeholder="Adresas">
        <input type="text" name="postcode" maxlength="5" placeholder="Pašto kodas">
      </div>
    </div>
    <div class="row">
      <div class="form-group col text-center">
        <input type="text" name="city" value="" placeholder="Miestas">
        <input type="text" name="country" value="Lietuva">
      </div>
    </div>
    <div class="row">
      <div class="form-group col text-center">
        <input class="btn btn-sm btn-outline-secondary" type="submit" value="Registruotis">
      </div>
    </div>
  </form>
</main> <!-- END CONTAINER -->
<?php require_once('footer.php') ?>
