<html>
<head>
    <title>FORMULARI</title>
</head>
<body>
    <h2>EXERCICI 1</h2>
    <form action="ejercicio1.php" method="GET">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="llinatge1">Llinatge 1:</label>
        <input type="text" name="llinatge1" required><br>

        <label for="llinatge2">Llinatge 2:</label>
        <input type="text" name="llinatge2" required><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nom = $_GET["nom"];
        $llinatge1 = $_GET["llinatge1"];
        $llinatge2 = $_GET["llinatge2"];

        echo "Nom: $nom<br>";
        echo "Llinatge1: $llinatge1<br>";
        echo "Llinatge2: $llinatge2<br>";
    }
    ?>
</body>
</html>