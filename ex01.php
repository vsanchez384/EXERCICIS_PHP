<html>
    <?php
    // EXERCICI 1 - Generar de forma aleatòria una array unidimensional de nombres de 10 posicions.
    echo "EXERCICI 1";
    for ($i = 0; $i < 10; $i++) {
        $nombres[] = rand(); // Genera números aleatoris entre 1 i 10
        echo $nombres [$i]; // - d'aquesta manera es veuen ordenats per una llista
        echo "<br>"; 
    }
    // print_r($nombres); // - d'aquesta manera es veuen en una linea
    ?>
</html>