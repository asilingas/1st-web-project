<footer class="container bg-nav-custom">
  <div class="row">
    <div class="col-1 logo px-0">
      <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
    </div>
    <div class="col-2">
      <h3>Apie</h3>
      <p>Kontinentas.lt</p>
      <p>Jonas Jonaitis</p>
      <p>v.pavarde@gmail.com</p>
      <p><a href="https://www.facebook.com/" target="_blank"><span class="fab fa-facebook footer-icons"></span></a>
      <a href="https://www.instagram.com/" target="_blank"><span class="fab fa-instagram footer-icons"></span></a></p>
    </div>
    <div class="col-3">
      <h3>Nuorodos</h3>
      <p><a href="#">Grąžinimas</a></p>
      <p><a href="#">Pirkimo-pardavimo sąlygos</a></p>
    </div>
    <div class="col-2">
      <!-- reserved for bonus items -->
    </div>
    <div class="col-4">
      <?php
      if (!isset($_SESSION['email'])) {
        echo "<h3>Naujienlaiškis</h3>
        <p>Naujienlaiškio registracija</p>
        <form action='newsletter.php' method='post'>
        <input type='text' name='email' placeholder='elektroninis@paštas.lt'>
        <button type='submit' name='button' class='btn btn-sm btn-outline-light'>UŽSISAKYTI</button>
        </form>";
      } ?>

    </div>
  </div>
  <!-- truksta copyright + metu -->
</footer>

<!-- ---->
<script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript"  src="libs/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script type="text/javascript"  src="main.js">    </script>
</body>
</html>
