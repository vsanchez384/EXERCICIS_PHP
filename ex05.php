<html>
    <?php
    // EXERCICI 5
    echo "<br>EXERCICI 5 - Ascendent<br>" . "<br>";
    ksort($fruites); // Ordre de manera ascendent
    foreach ($fruites as $fruita => $stock) {
        echo $fruita . ': ' . $stock . '<br>';
    }

    echo "<br>EXERCICI 5 - Descendent<br>" . "<br>";
    krsort($fruites); // Ordre de manera descendent
    foreach ($fruites as $fruita => $stock) {
        echo $fruita . ': ' . $stock . '<br>';
    }
    ?>
</html>