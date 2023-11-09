<html>
    <?php
    // 11 - Imprimir els nombres múltiples de 3 que hi ha entre dues variables. 
    // Treu la informació en una llista no ordenada.
    echo "<ul>";
    $inici = 10; 
    $fi = 50;    
    for ($i = $inici; $i <= $fi; $i++) {
        if ($i % 3 == 0) {
            echo "<li>$i</li>";
        }
    }
    echo "</ul>";
    ?>
</html>