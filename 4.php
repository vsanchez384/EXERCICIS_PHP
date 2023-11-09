<html>
    <?php
    // 4 - Concateni dos strings i tregui per pantalla el
    // nombre de caràcters de l’string resultats
    $string1 = "Hola";
    $string2 = "món";
    $concatenat = $string1 . " " . $string2;
    $nombreCaracters = strlen($concatenat);
    echo "String concatenat: $concatenat<br>";
    echo "Nombre de caràcters: $nombreCaracters";
    ?>
</html>