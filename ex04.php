<!-- ejercicio4.php -->
<html>
<head>
    <title>FORMULARI</title>
</head>
<body>
    <h2>EXERCICI 4</h2>
    <form action="ejercicio4.php" method="GET">
        <!-- ... (copiar el contenido del ejercicio 4) -->
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nom = $_GET["nom"];
        $llinatge1 = $_GET["llinatge1"];
        $llinatge2 = $_GET["llinatge2"];
        $ciutat = $_GET["ciutat"];

        echo "Nom: $nom<br>";
        echo "Llinatge1: $llinatge1<br>";
        echo "Llinatge2: $llinatge2<br>";
        echo "Ciutat: $ciutat<br>";

        if (isset($_GET["aficions"])) {
            $aficions = $_GET["aficions"];
            echo "Aficions: " . implode(", ", $aficions);
        }

        $centreIntegrat = $_GET["centreIntegrat"];
        echo "Centre Integrat: $centreIntegrat<br>";
    }
    ?>
</body>
</html>
