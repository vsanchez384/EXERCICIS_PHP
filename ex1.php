<!DOCTYPE html>
<html>
<body>
<?php

/* EXERCICI 1 */
function carregarFitxer ($nomfitxer, &$arrayAsociatiu)
{
	$jsonSting = file_get_contents($nomfitxer);
	$arrayAsociatiu = json_decode($jsonSting, true);
	

    // Verifica si hi ha errors durant la decodificació JSON
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Error JSON: ' . json_last_error_msg());
    }
}

$persones = array();
carregarFitxer("prova_json.json",$persones);
print_r($persones);



?>
</body>
</html>
