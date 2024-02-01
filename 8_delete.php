<html>
<?php
# EXERCICI 4 (ELIMINAR UNA ID)
echo "<h3>EXERCICI 4</h3><br>";
include "connectar_bd.php";
try {
  
  // sql to delete a record
  $sql = "DELETE FROM CLIENT WHERE id=3";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>