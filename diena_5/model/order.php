<?php
//UZSAKYMO KURIMAS
function createOrder($name, $lname, $email, $address, $postcode, $city, $tel, $shipping_id, $total_price) {
  $manoSQL = "INSERT INTO orders VALUES (NULL, '$name', '$lname', '$email', '$address', '$postcode', '$city', $tel, '$shipping_id', NOW(), 1, '$total_price')";
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
