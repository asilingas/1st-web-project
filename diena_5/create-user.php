<?php
  require_once('model/db-connect.php');
  require_once('model/register.php');
  require_once('header.php');
  if ($_POST['password'] == $_POST['password1']) {
    if (isset($_POST['email'], $_POST['password'], $_POST['name'],  $_POST['lname'], $_POST['address'], $_POST['postcode'], $_POST['city'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $vardas = $_POST['name'];
      $pavarde = $_POST['lname'];
      $adresas = $_POST['address'];
      $postcode = $_POST['postcode'];
      $city = $_POST['city'];
      $hashed = hash('sha512', $password);
      $user = createUser($email, $hashed, $vardas, $pavarde, $adresas, $postcode, $city);
    } else {
      echo "<p>Yra neužpildytų laukų!</p>";
    }
  } else {
    echo "<p>Nesutampa slaptažodžiai!</p>";
  }
echo "<p class='text-center'><a href='index.php'>Grįžti į pradžią</a><p>";
require_once('footer.php');
 ?>
