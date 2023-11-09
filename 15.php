<html>
    <?php
    // 15 - Imprimir els primers N nombres primers. 
    // Treu la informació dins d’una llista ordenada. 
    $nombresPrimers = 10; // nº de nombres que es volen treure
    $count = 0;
    $nombre = 2;
    $primers = [];
    
    while ($count < $nombresPrimers) {
        $esPrimer = true;
        for ($i = 2; $i <= sqrt($nombre); $i++) {
            if ($nombre % $i == 0) {
                $esPrimer = false;
                break;
            }
        }
        if ($esPrimer) {
            $primers[] = $nombre;
            $count++;
        }
        $nombre++;
    }
    
    echo "<ol>";
    foreach ($primers as $primer) {
        echo "<li>$primer</li>";
    }
    echo "</ol>";
    ?>
</html>