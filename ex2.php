<!DOCTYPE html>
<html>
<body>
<?php

/* EXERCICI 2 */
// Funció per imprimir una array multidimensional associativa dins d'una taula HTML
function imprimirArrayEnTaula($arrayAssociatiu) {
    echo '<table border="1">';
    
    // Itera sobre cada fila de l'array associatiu
    foreach ($arrayAssociatiu as $fila) {
        echo '<tr>';
        
        // Itera sobre cada element de la fila
        foreach ($fila as $valor) {
            echo '<td>' . $valor . '</td>';
        }
        
        echo '</tr>';
    }
    
    echo '</table>';
}

// Ús de la funció
$arrayTaula = array(
    array('Nom' => 'Juan', 'Edat' => 25, 'Ciutat' => 'Campos'),
    array('Nom' => 'Toni', 'Edat' => 30, 'Ciutat' => 'Porreres')
);

imprimirArrayEnTaula($arrayTaula);

?>
</body>
</html>