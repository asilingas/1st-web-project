<?php
require_once('model/db-connect.php');
require_once('model/login.php');
if (isset($_POST['email'], $_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $hashed = hash('sha512', $password);
  $login = loginAuthentication($email, $hashed);
	if(is_array($login)) {
    session_start();
    $_SESSION['email'] = $login['email'];
    $_SESSION['name'] = $login['name'];
	} else {
	   echo "<p>El paštas arba slaptažodis yra neteisingas!</p>";
	}
}
header("Location: index.php");
