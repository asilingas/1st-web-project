<?php
require_once('header.php');
require_once('main-bar.php');
?>
<div class="container">
  <div class="row">
    <div class="col-4">
      <h5>Kontinentas.lt</h5>
      <h5>Jonas Jonaitis</h5>
      <h5>v.pavarde@gmail.com</h5>
      <h5>+370&nbsp612&nbsp34567</h5>
    </div>
    <form class="col-8" action="send-feedback.php" method="post">
      <h5>Susisiekimo forma</h5>
      <div class="form-group">
        <input type="text" name="name" value="" placeholder="Vardas">
      </div>
      <div class="form-group">
        <input type="text" name="email" value="" placeholder="El. paštas">
      </div>
      <div class="form-group">
        <textarea name="comment" rows="6" cols="60" placeholder="Jūsų klausimas"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Siųsti">
      </div>
    </form>
  </div> <!-- END ROW -->
</div> <!-- END CONTAINER -->
<?php require_once('footer.php'); ?>
