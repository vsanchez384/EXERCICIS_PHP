<html>
    <?php
    // EXERCICI 6
    echo "<br>EXERCICI 6 - Ascendent per stock<br>";
    asort($fruites); // Ordre de manera ascendent
    foreach ($fruites as $fruita => $stock) {
        echo $fruita . ': ' . $stock . '<br>';
    }
    echo "<br>EXERCICI 6 - Descendent per stock<br>";
    arsort($fruites); // Ordre de manera descendent
    foreach ($fruites as $fruita => $stock) {
        echo $fruita . ': ' . $stock . '<br>';
    }
    ?>
</html>