<?php
//SHIPPING SARASO ISVEDIMAS
function getShippingList($kiekis=9999) {
  $manoSQL = "SELECT * FROM shipping LIMIT $kiekis";
  $results = mysqli_query(getPrisijungimas(), $manoSQL);
  return $results;
}
//VIENO SHIPPINGO ISVEDIMAS
function getShipping($id) {
  $manoSQL = "SELECT * FROM shipping WHERE id = $id";
  $results = mysqli_query(getPrisijungimas(), $manoSQL);
  $results_array = mysqli_fetch_assoc($results);
  return $results_array;
}
