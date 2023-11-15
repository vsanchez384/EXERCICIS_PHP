<html>
    <?php
    echo "<h1>Arrays Associatives</h1>";
    // EXERCICI 1
    echo "<br>EXERCICI 1<br>" . "<br>";
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

    $fruites["mangos"] = 4;

    foreach($fruites as $clau => $valor){
        echo $clau . ":" . $valor . "<br>";
    }
    ?>
</html>