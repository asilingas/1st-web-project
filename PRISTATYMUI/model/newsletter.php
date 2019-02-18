<?php
function addNewsletter($email) {
$manoSQL = "INSERT INTO newsletter VALUES (NULL, NOW(), '$email')";
$SQLquery = mysqli_query(getPrisijungimas(), $manoSQL);
if (!$SQLquery) {
  echo "Vartotojo sukurti nepavyko." . mysqli_error(getPrisijungimas());
} else {
  echo "<p>Jūsų el. paštas pridėtas prie naujienlaiškio!</p>";
}
}
