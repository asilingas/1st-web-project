<?php
// VIENO PRODUKTO ISVEDIMAS
function getProduct($id) {
  $manoSQL = "SELECT * FROM product WHERE id = $id";
  $results = mysqli_query(getPrisijungimas(), $manoSQL);
  $results_array = mysqli_fetch_assoc($results);
  return $results_array;
}
// PRODUKTO SARASO ISVEDIMAS
function getProducts($kiekis=9999) {
  $manoSQL = "SELECT * FROM product LIMIT $kiekis";
  $results = mysqli_query(getPrisijungimas(), $manoSQL);
  return $results;
}
// PRODUKTO EDITINIMAS
function editProduct($id, $name, $description, $price, $size, $type, $quantity) {
  $manoSQL = "UPDATE product SET name = '$name', description = '$description', price = '$price', size = '$size', type = '$type', quantity = '$quantity' WHERE id = $id LIMIT 1";
  $SQLquery = mysqli_query(getPrisijungimas(), $manoSQL);
  if (!$SQLquery) {
    echo "Prekės id:$id atnaujinti nepavyko!" . mysqli_error(getPrisijungimas());
  } else {
    echo "Prekė id:$id atnaujinta!";
  }
}
//PRODUKTO TRYNIMAS
function deleteProduct($id) {
  $manoSQL = "DELETE FROM product WHERE id = $id LIMIT 1";
  $SQLquery = mysqli_query(getPrisijungimas(), $manoSQL);
  if (!$SQLquery) {
    echo "Prekės id:$id ištrinti nepavyko".mysqli_error(getPrisijungimas());
  } else {
    echo "Prekė id:$id ištrinta!";
  }
}
//PRODUKTO KURIMAS
function createProduct($name, $description, $price, $size, $type, $quantity) {
  $manoSQL = "INSERT INTO product VALUES (NULL, '$name', '$description', '$price', '$size', '$type', '$quantity', NOW())";
  $SQLquery = mysqli_query(getPrisijungimas(), $manoSQL);
  if (!$SQLquery) {
    echo "Prekės sukurti nepavyko. " . mysqli_error(getPrisijungimas());
  } else {
    echo "Prekė $name sukurta!";
  }
}
