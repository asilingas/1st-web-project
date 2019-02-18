<?php
//LOGINO PATIKRA
function loginAuthentication($email, $password) {
  $manoSQL = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $results = mysqli_query(getPrisijungimas(), $manoSQL);
  $results_array = mysqli_fetch_assoc($results);
  return $results_array;
}
