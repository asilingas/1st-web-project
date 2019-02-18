<?php
//UZSAKYMO KURIMAS
function createOrder($name, $lname, $email, $address, $postcode, $city, $tel, $shipping_id, $product_id, $total_price) {
  $manoSQL = "INSERT INTO orders VALUES (NULL, '$name', '$lname', '$email', '$address', '$postcode', '$city', $tel, '$shipping_id', NOW(), '$product_id', '$total_price')";
  $SQLquery = mysqli_query(getPrisijungimas(), $manoSQL);
  if (!$SQLquery) {
    echo "Orderio sukurti nepavyko. " . mysqli_error(getPrisijungimas());
  }
}
// UZSAKYMO ID GAVIMAS
function getOrder($id) {
  $manoSQL = "SELECT * FROM order WHERE id = $id";
  $results = mysqli_query(getPrisijungimas(), $manoSQL);
  $results_array = mysqli_fetch_assoc($results);
  return $results_array;
}
// UZSAKYMU SARASO ISVEDIMAS
function getOrders($kiekis=9999) {
  $manoSQL = "SELECT * FROM orders LIMIT $kiekis";
  $results = mysqli_query(getPrisijungimas(), $manoSQL);
  return $results;
}
