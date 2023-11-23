<!DOCTYPE html>
<html>
<body>
<?php

// EXERCICI 1
echo "EXERCICI 1 <br>" . "<br>";
# Dia del mes amb números
echo "> Dia " . date("d") . "<br>";

# Mes
echo "> " . date("m") . "<br>";

# Mes amb una representació textual (anglès)
echo "> " . date("M") . "<br>";

# ANY
echo "> " . date("Y") . "<br>";

# Dia de la setmana (anglès)
echo "> " . date("l") . "<br>";

# Data completa en format Dia-Mes-Any
echo "> " . date("d-m-Y") . "<br>";

# Data completa en format Mes-Dia-Any
echo "> " . date("m-d-Y") . "<br>";

# Data completa en format Any-Mes-Dia
echo "> " . date("Y-m-d") . "<br>";

# Hora en format 24h
echo "> " . date("h:i:sa") . "<br>";

# Hora en format 12h afegint “AM” o “PM”
echo "> " . date("H:i:sa") . "<br>";

?>
</body>
</html>