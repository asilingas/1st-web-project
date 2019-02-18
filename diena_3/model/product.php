<?php
  // VIENAM PRODUKTUI
  function getProduct($id) {
    $manoSQL = "SELECT * FROM product WHERE id = $id";
    $results = mysqli_query(getPrisijungimas(), $manoSQL);
    $results_array = mysqli_fetch_assoc($results);
    return $results_array;
  }
  // PRODUKTU SARASUI
  function getProducts($kiekis=9999) {
    $manoSQL = "SELECT * FROM product LIMIT $kiekis";
    $results = mysqli_query(getPrisijungimas(), $manoSQL);
    return $results;
  }
  // PRODUKTO EDITINIMAS
  function editProduct($id, $title, $description, $price, $size, $type, $quantity) {
    
    foreach ($variable as $key => $value) {
      if ((!$id) && ($value != "") && ($value != 0)) {
        $manoSQL = "UPDATE product SET '$variabe' = '$value' WHERE id = $id";
      }
    }
  }


// function deleteProduct($id) {
//   $manoSQ = "DELETE FROM product WHERE id = $id LIMIT";
//   $SQLquery = mysqli_query(getPrisijungimas(), $manoSQL);
//   if (!$SQLquery) {
//     echo "Produkto istrinti nepavyko".mysqli_error(getPrisijungimas());
//   } else {
//     echo "Produktas ištrintas";
//   }
// }
