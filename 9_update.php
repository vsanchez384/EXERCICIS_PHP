<?php
# EXERCICI 5 (UPDATE DE UNA ID)
echo "<h3>EXERCICI 5</h3><br>";
include "connectar_bd.php";

try {

  $sql = "UPDATE CLIENT SET lastname='Doex' WHERE id=2";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>