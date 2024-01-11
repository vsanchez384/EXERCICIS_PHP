<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
    $llinatge1 = isset($_GET["llinatge1"]) ? $_GET["llinatge1"] : "";
    $llinatge2 = isset($_GET["llinatge2"]) ? $_GET["llinatge2"] : "";
    $ciutat = isset($_GET["ciutat"]) ? $_GET["ciutat"] : "";

    echo "Nom: $nom<br>";
    echo "Llinatge 1: $llinatge1<br>";
    echo "Llinatge 2: $llinatge2<br>";
    echo "Ciutat: $ciutat<br>";

    if (isset($_GET["aficions"])) {
        $aficions = $_GET["aficions"];
        echo "Aficions: " . implode(", ", $aficions) . "<br>";
    }

    $centreIntegrat = isset($_GET["centreIntegrat"]) ? $_GET["centreIntegrat"] : "";
    echo "Centre Integrat: $centreIntegrat<br>";
}
?>