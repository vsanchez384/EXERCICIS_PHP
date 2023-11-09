<html>
    <?php
    // 6 - Calcula el preu total a pagar d’unes entrades de cinema 
    // en funció del nombre d’entrades
    $nombreEntrades = 8;
    if ($nombreEntrades < 5) {
        $preuEntrada = 5;
    } elseif ($nombreEntrades >= 5 && $nombreEntrades <= 9) {
        $preuEntrada = 4;
    } else {
        $preuEntrada = 3;
    }
    echo "Preu per $nombreEntrades entrades: $preuEntrada euros per entrada";
    ?>
</html>