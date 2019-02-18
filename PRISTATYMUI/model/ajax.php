<?php
// REIKIA TAISYTI
require_once('model/db-connect.php');
if (isset($_POST['search'])) {
  $search = $_POST['search'];
  $manoSQL = "SELECT name FROM product WHERE name LIKE '%$search%' LIMIT 5";
  $SQLquery = mysqli_query(getPrisijungimas(), $manoSQL);
  echo "<ul>";
  while ($result = mysqli_fetch_array($SQLquery)) {
    ?>
    <li onclick='fill("<<?php echo $result['name']; ?>")'
    <a>
      <?php echo $result['name']; ?>
    </li><a>
<?php }} ?>
        </ul>
