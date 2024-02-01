<html>
<?php
include "connectar_bd.php";
try {
    
    $sql = "INSERT INTO CLIENT (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. La darrera ID insertada es: " . $last_id;  
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>