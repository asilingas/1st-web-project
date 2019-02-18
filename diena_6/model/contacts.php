<?php
function createQuestion($name, $email, $question) {
  $manoSQL = "INSERT INTO feedback VALUES (NULL, '$name', '$email', '$question', NOW())";
  $SQLquery = mysqli_query(getPrisijungimas(), $manoSQL);
  if (!$SQLquery) {
    echo "DB klaida " . mysqli_error(getPrisijungimas());
  } else {
    echo "<p class='text-center m-2'>Žinutė išsiųsta.</p>";
    echo "<p class='text-center'><a href='index.php'>Grįžti į pradžią</a><p>";
  }
}
