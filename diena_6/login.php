<?php
require_once('model/db-connect.php');
require_once('model/login.php');
require_once('header.php');
require_once('main-bar.php');
echo "<div class='container'>
        <div class='row'>
          <div class='col m-3'>";
if (isset($_POST['email'], $_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $hashed = hash('sha512', $password);
  $login = loginAuthentication($email, $hashed);
	if(is_array($login)) {
    session_start();
    $_SESSION['email'] = $login['email'];
    $_SESSION['name'] = $login['name'];
    header("Location: index.php");
	} else {
	   echo "<p>El paštas arba slaptažodis yra neteisingas! Bandykite dar kartą</p></div></div>";
	}
}
header("Refresh:5; url=index.php");
require_once('footer.php');
