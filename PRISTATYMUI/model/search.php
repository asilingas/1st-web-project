<?php
function getProductSearch($search) {
  $manoSQL = "SELECT * FROM product WHERE description LIKE '%$search%'";
  $results = mysqli_query(getPrisijungimas(), $manoSQL);
  return $results;
}
