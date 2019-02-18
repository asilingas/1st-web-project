<?php
require_once('model/db-connect.php');
require_once('model/newsletter.php');
require_once('header.php');
require_once('main-bar.php');
echo "<div class='container'>
        <div class='row'><div class='col text-center m-3'>";
if (isset($_POST['email'])) {
  $email = $_POST['email'];
  addNewsletter($email);
}
echo "</div></div>";
header('refresh:5;url=index.php');
require_once('footer.php');
