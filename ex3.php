<!DOCTYPE html>
<html>
<body>
<?php

/* EXERCICI 3 */
function obtenirNoms($arrayAssociatiu)
{
    $noms = array();

    foreach ($arrayAssociatiu as $value) {
        // Verifica si la clau 'nom' existeix a l'array
        if (array_key_exists('nom', $value)) {
            // Afegeix el nom a l'array $noms
            $noms[] = $value['nom'];
        }
    }

    return $noms;
}

$persones = array();
carregarFitxer("prova_json.json", $persones);
print_r($persones);

$noms = obtenirNoms($persones);
print_r($noms);

?>
</body>
</html>