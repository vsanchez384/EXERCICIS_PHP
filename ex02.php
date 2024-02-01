<html>
<?php
# EXERCICI 2
echo "<h3>EXERCICI 2</h3><br>";
include "connectar_bd.php";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $llinatge1 = $llinatge2 = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = test_input($_GET["name"]);
    $llinatge1 = test_input($_GET["llinatge1"]);
    $llinatge2 = test_input($_GET["llinatge2"]);
    $email = test_input($_GET["email"]);

    // Inserir valors a la taula CLIENT
    try {
        $sql_insert = "INSERT INTO CLIENT (nom, llinatge1, llinatge2, email) VALUES ('$name', '$llinatge1', '$llinatge2', '$email')";
        $conn->exec($sql_insert);

        echo "Nou registre creat amb èxit";
        $last_id = $conn->lastInsertId();
        echo " La darrera ID insertada és: " . $last_id;
    } catch (PDOException $e) {
        echo $sql_insert . "<br>" . $e->getMessage();
    }
}
?>

<form method="get">
    Nom: <input type="text" name="name"><br>
    Llinatge1: <input type="text" name="llinatge1"><br>
    Llinatge2: <input type="text" name="llinatge2"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
</form>

</html>