<html>
<?php
include "dades_connexio.php";

try {
  $sql = "CREATE DATABASE prova1";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Base de dades creada<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
</html>