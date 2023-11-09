<html>
    <?php
    // 10 - Imprimir els nombres imparells entre 1 i 20. 
    // Treu la informació dins d’una taula.
    echo "<table>";
    echo "<tr>";
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 != 0) {
            echo "<td>$i</td>";
        }
    }
    echo "</tr>";
    echo "</table>";
    ?>
</html>