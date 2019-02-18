<?php
//UZSAKYMO KURIMAS
function createOrder($name, $lname, $email, $address, $postcode, $city, $shipping_id, $total_price) {
  $manoSQL = "INSERT INTO orders VALUES (NULL, '$name', '$lname', '$email', '$address', '$postcode', '$city', '$shipping_id', NOW(), 1, '$total_price')";
  $SQLquery = mysqli_query(getPrisijungimas(), $manoSQL);
  if (!$SQLquery) {
    echo "Orderio sukurti nepavyko. " . mysqli_error(getPrisijungimas());
  } else {
    $order_true = true;
    return $order_true;
  }
}
//UZSAKYMO ID GAVIMAS
function getOrder() {

}
