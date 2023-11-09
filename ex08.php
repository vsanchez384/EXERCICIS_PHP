<html>
    <?php
    // 8 - Ha d’endevinar el nombre entre 1 i 100 que l’usuari ha introduït.
    // Pensa alguna forma de fer-lo més òptim que no sigui la de recórrer 
    // tots els nombres de l’1 al 100.
    $trobar=rand(1, 100);
    $min=1;
    $max=100;
    $intents=0;
 
    while (true) {
    $number=floor(($max-$min)/2)+$min;
    $intents++;
    if ($number==$trobar) {
        echo "<br>Has trobat el número $trobar en $intents intents";
        break;
    }
    if ($number<$trobar) {
        echo "<br>El nombre $number es més petit!!";
        $min=$number;
    } else {
        echo "<br>El nombre $number es més gran!!";
        $max=$number;
    }
    }
    ?>
</html>