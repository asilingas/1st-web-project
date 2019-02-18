<?php
require_once('model/db-connect.php');
require_once('model/contacts.php');
require_once('header.php');
require_once('main-bar.php');
if (isset($_POST['name'], $_POST['email'], $_POST['comment'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $question = $_POST['comment'];
  createQuestion($name, $email, $question);
}
require_once('footer.php');
