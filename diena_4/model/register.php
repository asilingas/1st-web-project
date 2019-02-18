<?php
  function createUser($email, $password, $vardas, $pavarde, $adresas, $postcode, $city) {
    $manoSQL = "INSERT INTO users VALUES (NULL, '$email', '$password', '$vardas', '$pavarde', '$adresas', '$postcode', '$city', NOW(), 0)";
    $SQLquery = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$SQLquery) {
      echo "Vartotojo sukurti npeavyko." . mysqli_error(getPrisijungimas());
    } else {
      echo "Vartotojas el. paštu $email sukurtas!";
    }
  }
