<html>
<?php
include "connectar_bd.php";

try {
  $sql = "CREATE DATABASE PROVES";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Base de dades creada<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
</html>