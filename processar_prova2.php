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
}
?>