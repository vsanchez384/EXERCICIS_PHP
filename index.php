<html>
    <?php
    echo "<h1>Arrays Associatives</h1>";
    // EXERCICI 1, 2 i 3
    echo "<br>EXERCICI 1, 2 i 3<br>" . "<br>";
    $fruites = [
        'poma' => 9,
        'taronja' => 25,
        'llimona' => 5,
        'pera' => 8,
        'plàtan' => 12,
        'pinya' => 3,
        'meló' => 4,
        'síndria' => 5,
        'albercoc' => 7,
        'maduixa' => 14
    ];

    // Afegeix o sustitueix el valor
    $fruites["mangos"] = 10;
    $fruites["kiwi"] = 33;

    // Mostra el stock de cada fruita
    foreach($fruites as $clau => $stock){
        echo $clau . ":" . $stock . "<br>";
    }

    // EXERCICI 4
    echo "<br>EXERCICI 4<br>" . "<br>";
    foreach ($fruites as $stock) {
        $stock = $stock * 2;
    }

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

    // EXERCICI 7
    echo "<br>EXERCICI 7 - Total stock<br>";
    $totalStock = array_sum($fruites);
    echo 'Total de stock: ' . $totalStock . '<br>';

    // EXERCICI 8
    echo "<br>EXERCICI 8<br>";
    unset($fruites['pera']);
    
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