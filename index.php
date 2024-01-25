<html>
<?php
include "dades_connexio.php";

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

        echo "Nou registre creat amb èxit. <br>";
        $last_id = $conn->lastInsertId();
        echo " La darrera ID insertada és: " . $last_id . "<br>";
    } catch (PDOException $e) {
        echo $sql_insert . "<br>" . $e->getMessage();
    }
}
?>
<br>
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nom: <input type="text" name="name"><br>
    Llinatge1: <input type="text" name="llinatge1"><br>
    Llinatge2: <input type="text" name="llinatge2"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
</form>

<?php
try {
    $stmt = $conn->prepare("SELECT * FROM CLIENT");
    $stmt->execute();
    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$arrayValues = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<table wdith=\"100%\">\n";
echo "<tr>\n";
// add the table headers
foreach ($arrayValues[0] as $key => $useless) {
    echo "<th>$key</th>";
}
echo "</tr>";
// display data
foreach ($arrayValues as $row) {
    echo "<tr>";
    foreach ($row as $key => $val) {
        echo "<td>$val</td>";
    }
    echo "</tr>\n";
}
// close the table
echo "</table>\n";

?>

</html>