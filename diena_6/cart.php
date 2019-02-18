<?php
require_once('model/db-connect.php');
require_once('model/product.php');
require_once('header.php');
require_once('main-bar.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $item = getProduct($id);
  echo "<div class='container'>
          <div class='row'>
            <div class='col m-3'>
              <div id='carouselExampleControls' class='carousel slide carousel-fade' data-ride='carousel'>
                <div class='carousel-inner'>
                  <div class='carousel-item active'>
                    <img src='img/products/{$item['img_name']}-2.jpg' class='d-block w-100' alt='{$item['img_name']}'>
                  </div>
                  <div class='carousel-item'>
                    <img src='img/products/{$item['img_name']}-30x40-1200x800.jpg' class='d-block w-100' alt='{$item['img_name']}'>
                  </div>
                  <div class='carousel-item'>
                    <img src='img/products/default.jpg' class='d-block w-100' alt='{$item['img_name']}'>
                  </div>
                </div>
                <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                  <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                  <span class='carousel-control-next-icon' aria-hidden='true'></span>
                  <span class='sr-only'>Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class='row'>";
  echo "<div class='col-4 m-2'>
  <img class='img-fuid' src='img/products/{$item['img_name']}-30x40-400x400.jpg' alt='{$item['img_name']}'>
  </div>
      <div class='col-7 m-2'>
        <p class='h4'>{$item['name']}</p>
        <p class=''>{$item['description']}</p>
        <p class=''>Dydis: {$item['size']} cm</p>
        <p><strong>{$item['price']} €</strong></p>
        <a href='shipping.php?id=$id'><button class='btn btn-primary'>PIRKTI</button></a>
      </div>
    </div>
  </div>";
} else {
  header("Location: index.php");
}
require_once('footer.php');
 ?>
