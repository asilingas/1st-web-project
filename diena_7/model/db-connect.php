<?php
DEFINE("NAME", "projektas");
DEFINE("PASSWORD", "slaptazodis");
DEFINE("HOST", "localhost");
DEFINE("USER", "arturas");
$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME);
//------------------------------------------------
// PRISIJUNGIMO TIKRINIMAS
// if ($prisijungimas) {
//   echo "Prisijungti pavyko.";
// } else {
//   echo "Nepavhyko".mysqli_connect_error();
// }
//------------------------------------------------
function getPrisijungimas() {
  global $prisijungimas;
  return $prisijungimas;
}
