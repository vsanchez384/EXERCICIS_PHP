<html>
    <?php
    // EXERCICI 9
    echo "<br>EXERCICI 9<br>";
    $altresFruites = array(
        'mango' => 10,
        'meló' => 4,
        'maduixa' => 14,
        'kiwi' => 6
    );
    
    $diferencia = array_diff($fruites, $altresFruites);
    $interseccion = array_intersect($fruites, $altresFruites);
    $merge = array_merge($fruites, $altresFruites);
    
    print_r($diferencia);
    print_r($interseccion);
    print_r($merge);
    ?>
</html>