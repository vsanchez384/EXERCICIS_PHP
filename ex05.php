<html>
<body>

<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $llinatge1 = $llinatge2 = $ciutat = $centre_integrat = "";
$aficions = array();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = test_input($_GET["name"]);
    $llinatge1 = test_input($_GET["llinatge1"]);
    $llinatge2 = test_input($_GET["llinatge2"]);
    $ciutat = test_input($_GET["ciutat"]);
	
    $aficions = isset($_GET["aficions"]) ? $_GET["aficions"] : array();
    foreach ($aficions as $key => $valor) {
        $aficions[$key] = test_input($valor);
    }
    $centre_integrat = test_input($_GET["centre_integrat"]);
}
?>

<form method="get">
    Nom: <input type="text" name="name"><br>
    Llinatge1: <input type="text" name="llinatge1"><br>
    Llinatge2: <input type="text" name="llinatge2"><br>
    Ciutat:
    <input type="radio" name="ciutat" value="Barcelona"> Barcelona
    <input type="radio" name="ciutat" value="Madrid"> Madrid
    <input type="radio" name="ciutat" value="Valencia"> Valencia
    <br>
    Aficions:
    <input type="checkbox" name="aficions[]" value="Esport"> Esport
    <input type="checkbox" name="aficions[]" value="Lectura"> Lectura
    <input type="checkbox" name="aficions[]" value="Viatjar"> Música
    <br>
    Centre Integrat:
    <select name="centre_integrat">
        <option value="Ies Manacor">Ies Manacor</option>
        <option value="Mossen Alcover">Mossen Alcover</option>
        <option value="Politecnic ponent">Politecnic Llevant</option>
    </select>
    <br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "<h2>Dades rebudes:</h2>";
    echo "Nom: $name<br>";
    echo "Llinatge1: $llinatge1<br>";
    echo "Llinatge2: $llinatge2<br>";
    echo "Ciutat: $ciutat<br>";
    echo "Aficions: " . implode(", ", $aficions) . "<br>";
    echo "Centre Integrat: $centre_integrat<br>";
}
?>

</body>
</html>