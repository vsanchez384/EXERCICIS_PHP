<html>
    <?php
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
    ?>
</html>