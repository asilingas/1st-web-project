<?php
  require_once('model/db-connect.php');
  require_once('model/register.php');
  if ($_POST['password'] == $_POST['password1']) {
    if (isset($_POST['email'], $_POST['password'], $_POST['name'],  $_POST['lname'], $_POST['address'], $_POST['postcode'], $_POST['city'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $vardas = $_POST['name'];
      $pavarde = $_POST['lname'];
      $adresas = $_POST['address'];
      $postcode = $_POST['postcode'];
      $city = $_POST['city'];
      $user = createUser($email, $password, $vardas, $pavarde, $adresas, $postcode, $city);
    } else {
      echo "Yra neužpildytų laukų!";
    }
  } else {
    echo "Nesutampa slaptažodžiai!";
  }

 ?>
<br>
back to homepage
