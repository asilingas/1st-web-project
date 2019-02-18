<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projektas.lt</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="libs/bootstrap-4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>
    <body>
      <header class="container bg-light">
        <div class="row align-items-center">
          <div class="col-1">
            <a href="https://www.facebook.com/" target="_blank"><span class="fab fa-facebook icons"></span></a>
            <a href="https://www.instagram.com/" target="_blank"><span class="fab fa-instagram icons"></span></a>
          </div>
          <div class="col">
            <?php
            if (isset($_SESSION['name'])) {
              echo "<strong>Sveiki, {$_SESSION['name']}! </strong>";
              echo "<a href='logout.php' class='btn btn-sm btn-outline-secondary'>Atsijungti</a>";
            } else {
              echo "<form class='' action='login.php' method='post'>
                <input type='text' name='email' placeholder='El. paštas'>
                <input type='password' name='password' placeholder='Slaptažodis'>
                <button type='submit' name='button' class='btn btn-sm btn-outline-secondary'>Prisijungti</button>
                <a href='registration.php' class='btn btn-sm btn-outline-secondary'>Registruotis</a>
                </form>";
            } ?>
          </div>
          <div class="col-3">
            <form class="" action="search.php" method="get">
              <input class="search-input" type="text" name="search" value="" placeholder="Prekių paieška">
              <button type="submit" class="btn btn-outline-secondary btn-sm">Paieška</button>
            </form>
          </div>
          <div class="col-2">
            <p><i class='fas fa-phone'></i>+370 612 34567</p>
          </div>
        </div>
      </header>
      <nav class="container bg-nav-custom">
        <div class="row align-items-center">
          <div class="col-1 logo px-0">
            <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
          </div>
          <div class="col-11">
            <ul class="row justify-content-around">
              <li class="col-2 btn btn-light"><a href="">Pasaulio žemėlapiai</a></li>
              <li class="col-2 btn btn-light"><a href="">Europos žemėlapiai</a></li>
              <li class="col-2 btn btn-light"><a href="">Lietuvos žemėlapiai</a></li>
              <li class="col-2 btn btn-light"><a href="">Krepšelis ( )</a></li>
              <li class="col-2 btn btn-light"><a href="contacts.php">Kontaktai</a></li>
            </ul>
          </div>
        </div>
      </nav>
