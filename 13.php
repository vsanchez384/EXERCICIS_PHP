<html>
    <?php
    // 13 - Imprimir la taula de multiplicar de tots els nombres de l’1 al 10. 
    // Treu una taula per a cada taula de multiplicar.
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td colspan='3'><strong>Taula del $i</strong></td></tr>";
        for ($j = 1; $j <= 10; $j++) {
            $producte = $i * $j;
            echo "<tr><td>$i x $j</td><td>=</td><td>$producte</td></tr>";
        }
    }
    echo "</table>";
    ?>
</html>