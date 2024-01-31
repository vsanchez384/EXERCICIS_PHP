<?php
class Calculadora
{
    // Mètodes per realitzar operacions bàsiques
    public function suma($a, $b)
    {
        return $a + $b;
    }

    public function resta($a, $b)
    {
        return $a - $b;
    }

    public function multiplicacio($a, $b)
    {
        return $a * $b;
    }

    public function divissio($a, $b)
    {
        // Manejar la divisió per zero
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Error: Divisió per zero.";
        }
    }

    public function potencia($base, $exponent)
    {
        return pow($base, $exponent);
    }

    public function factorial($n)
    {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * $this->factorial($n - 1);
        }
    }
}

// Crear una instància de la classe Calculadora
$laMevaCalculadora = new Calculadora();

// Realitzar algunes operacions de prova
$resultatSuma = $laMevaCalculadora->suma(5, 3);
$resultatResta = $laMevaCalculadora->resta(8, 2);
$resultatMultiplicacio = $laMevaCalculadora->multiplicacio(4, 6);
$resultatDivissio = $laMevaCalculadora->divissio(10, 2);
$resultatPotencia = $laMevaCalculadora->potencia(2, 3);
$resultatFactorial = $laMevaCalculadora->factorial(5);

// Mostrar resultats
echo "Suma: $resultatSuma<br>";
echo "Resta: $resultatResta<br>";
echo "Multiplicació: $resultatMultiplicacio<br>";
echo "Divisió: $resultatDivissio<br>";
echo "Potència: $resultatPotencia<br>";
echo "Factorial: $resultatFactorial<br>";

?>