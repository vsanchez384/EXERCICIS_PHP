<html>
<?php
include "dades_connexio.php";

try {
    // Crear la taula CLIENT si no existeix
    $sql_create_table = "CREATE TABLE IF NOT EXISTS CLIENT (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(255) NOT NULL,
        llinatge1 VARCHAR(255) NOT NULL,
        llinatge2 VARCHAR(255),
        email VARCHAR(255) NOT NULL
    )";

    $conn->exec($sql_create_table);
    
    // Inserir valors a la taula CLIENT
    $sql_insert = "INSERT INTO CLIENT (nom, llinatge1, llinatge2, email) VALUES ('John', 'Doe', '', 'john@example.com')";
    $conn->exec($sql_insert);
    
    echo "Base de dades i taula creades amb èxit. Nou registre inserit amb èxit.";
    $last_id = $conn->lastInsertId();
    echo " La darrera ID insertada és: " . $last_id;
} catch (PDOException $e) {
    echo $sql_create_table . "<br>" . $sql_insert . "<br>" . $e->getMessage();
}

$conn = null;
?>
</html>
