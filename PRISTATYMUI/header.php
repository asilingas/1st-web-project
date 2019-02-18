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
          <div class="col-2">
            <a href="https://www.facebook.com/" target="_blank"><span class="fab fa-facebook icons"></span></a>
            <a href="https://www.instagram.com/" target="_blank"><span class="fab fa-instagram icons"></span></a>
          </div>
          <div class="col">
            <?php
            if (isset($_SESSION['name'])) {
              echo "<strong>Sveiki, {$_SESSION['name']}! </strong>";
              echo "<a href='logout.php' class='btn btn-sm btn-outline-secondary'>Atsijungti</a>";
            } else {
              echo "<form name='loginForm' action='login.php' onsubmit='return validateLogin()' method='post'>
                <input type='text' name='email' placeholder='El. paštas' >
                <input type='password' name='password' placeholder='Slaptažodis' >
                <button type='submit' name='button' class='btn btn-sm btn-outline-secondary'>Prisijungti</button>
                <a href='registration.php' class='register-btn btn btn-sm btn-outline-secondary'>Registruotis</a>
                </form>";
            } ?>
          </div>
          <div class="col-3">
            <form class="" action="search.php" method="get">
              <input class="search" type="text" name="search" placeholder="Prekių paieška">
              <button type="submit" class="btn btn-outline-secondary btn-sm">Paieška</button>
            </form>
          </div>
          <div class="phone col-2">
            <p><span class='fas fa-phone'></span>+370&nbsp612&nbsp34567</p>
          </div>
        </div>
      </header>
      <nav class="container bg-nav-custom">
        <div class="row align-items-center">
          <div class="col-1 logo px-0">
            <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
          </div>
          <div class="col-11">
            <ul class="big-nav row justify-content-around">
              <li class="col-2 btn btn-light"><a href="product.php?type=Pasaulio">Pasaulio žemėlapiai</a></li>
              <li class="col-2 btn btn-light"><a href="product.php?type=Europos">Europos žemėlapiai</a></li>
              <li class="col-2 btn btn-light"><a href="product.php?type=Lietuvos">Lietuvos žemėlapiai</a></li>
              <li class="col-2 btn btn-light"><a href="product.php">Visi žemėlapiai</a></li>
              <li class="col-2 btn btn-light"><a href="contacts.php">Kontaktai</a></li>
            </ul>
            <div class="row justify-content-center">
              <div class="col-2">
              </div>
              <div class="col-10 navbar navbar-light light-blue lighten-4">
                <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                  aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                      class="fas fa-bars fa-1x"></i></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="product.php?type=Pasaulio">Pasaulio žemėlapiai<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="product.php?type=Europos">Europos žemėlapiai</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="product.php?type=Lietuvos">Lietuvos žemėlapiai</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="product.php">Visi žemėlapiai</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contacts.php">Kontaktai</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
