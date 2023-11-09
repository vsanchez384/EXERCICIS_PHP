<html>
    <?php
    // 14 - Indicar si un nombre N és un nombre primer.
    $nombre = 18;
    $esPrimer = true;

    if ($nombre <= 1) {
        $esPrimer = false;
    } else {
        for ($i = 2; $i <= sqrt($nombre); $i++) {
            if ($nombre % $i == 0) {
                $esPrimer = false;
                break;
            }
        }
    }

    if ($esPrimer) {
        echo "$nombre és un nombre primer";
    } else {
        echo "$nombre no és un nombre primer";
    }
    ?>
</html>