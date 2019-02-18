<?php
require_once('model/db-connect.php');
require_once('model/newsletter.php');
if (isset($_POST['email'])) {
  $email = $_POST['email'];
  addNewsletter($email);
}
header('refresh:5;url=index.php');
