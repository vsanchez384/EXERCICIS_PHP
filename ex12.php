<html>
    <?php
    // 12 - Imprimir la taula de multiplicar d’un nombre. 
    // Treu la informació dins d’una taula. 
    $nombre = 7;
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        $producte = $nombre * $i;
        echo "<tr><td>$nombre x $i</td><td>=</td><td>$producte</td></tr>";
    }
    echo "</table>";
    ?>
</html>