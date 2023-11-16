<!DOCTYPE html>
<html>
<body>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Edat</th>
        <th>Ciutat</th>
    </tr>
    <?php

    // Llegeix el contingut del fitxer JSON i el guarda com una cadena de text
    $jsonString = file_get_contents('prova_json.json');

    // Converteix la cadena JSON a un array associatiu en PHP
    $arrayAssociatiu = json_decode($jsonString, true);

    // Verifica si hi ha errors durant la decodificació JSON
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Error JSON: ' . json_last_error_msg());
    }

    // Itera sobre cada element de l'array associatiu
    foreach ($arrayAssociatiu as $persona) {
        echo "<tr>";
        // Imprimeix el valor de la clau 'nom' a una cel·la de la fila
        echo "<td>" . $persona['nom'] . "</td>";
        // Imprimeix el valor de la clau 'edat' a una cel·la de la fila
        echo "<td>" . $persona['edat'] . "</td>";
        // Imprimeix el valor de la clau 'ciutat' a una cel·la de la fila
        echo "<td>" . $persona['ciutat'] . "</td>";
        echo "</tr>";
    }

    ?>
</table>
</body>
</html>
