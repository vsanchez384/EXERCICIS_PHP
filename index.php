<html>
<?php
echo "<h1>EXERCICIS POO</h1>";

# EXERCICI 1
echo "<br><h3>EXERCICI 1</h3>";
class Persona
{
    public $nom;
    public $dataNaixement;
    public $dni;
    public $genere;

    public function saludar()
    {
        echo "{$this->nom} (DNI - {$this->dni} - {$this->dataNaixement} - {$this->genere}): Hola!<br>";
    }

    public function edat()
    {
        // Càlcul de l'edat (suposant que la data de naixement és en format 'd/m/yyyy')
        $dataActual = new DateTime();
        $dataNaixement = DateTime::createFromFormat('d/m/Y', $this->dataNaixement);
        $edat = $dataActual->diff($dataNaixement)->y;
        echo "Edat: $edat anys<br>";
    }
}

// Crear una instància de la classe Persona
$persona1 = new Persona();
$persona1->nom = "Miquel";
$persona1->dataNaixement = "04/08/1999";
$persona1->dni = "12345678A";
$persona1->genere = "Home";

// Provar els mètodes
$persona1->saludar();
$persona1->edat();

# EXERCICI 2
echo "<br><h3>EXERCICI 2</h3>";
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

# EXERCICI 3
echo "<br><h3>EXERCICI 3</h3>";

class Producte
{
    public $nom;
    public $preu;
    public $stock;

    public function __construct($nom, $preu, $stock)
    {
        $this->nom = $nom;
        $this->preu = $preu;
        $this->stock = $stock;
    }
}

class TendaVirtual
{
    public $productes = [];

    // Mètode per afegir un producte a la tenda
    public function afegirProducte($producte)
    {
        $this->productes[] = $producte;
        echo "Producte afegit a la tenda: {$producte->nom}<br>";
    }

    // Mètode per comprar un producte de la tenda
    public function comprarProducte($nom, $quantitat)
    {
        foreach ($this->productes as $producte) {
            if ($producte->nom == $nom) {
                if ($producte->stock >= $quantitat) {
                    $producte->stock -= $quantitat;
                    $total = $producte->preu * $quantitat;
                    echo "Compra realitzada: {$quantitat} unitats de {$producte->nom} ({$producte->preu}€) = {$total}€ <br>";
                } else {
                    echo "No hi ha prou estoc de {$producte->nom}<br>";
                }
                return;
            }
        }
        echo "Producte no trobat a la tenda<br>";
    }

    // Mètode per canviar el preu d'un producte de la tenda
    public function canviarPreuProducte($nom, $nouPreu)
    {
        foreach ($this->productes as $producte) {
            if ($producte->nom == $nom) {
                $producte->preu = $nouPreu;
                echo "Preu del producte {$producte->nom} actualitzat a {$nouPreu}€<br>";
                return;
            }
        }
        echo "Producte no trobat a la tenda<br>";
    }

    // Mètode per augmentar el stock d'un producte de la tenda
    public function augmentarStockProducte($nom, $quantitat)
    {
        foreach ($this->productes as $producte) {
            if ($producte->nom == $nom) {
                $producte->stock += $quantitat;
                echo "Estoc del producte {$producte->nom} augmentat en {$quantitat}<br>";
                return;
            }
        }
        echo "Producte no trobat a la tenda<br>";
    }

    // Mètode per imprimir el stock actual de la tenda
    public function imprimirStock()
    {
        echo "====================<br>";
        if (!empty($this->productes)) {
            foreach ($this->productes as $producte) {
                echo "<b>{$producte->nom}</b>: {$producte->preu}€ (x{$producte->stock}) <br>";
            }
        } else {
            echo "No hi ha productes a la tenda<br>";
        }
        echo "====================<br>";
    }
}

// Creem alguns productes
$producte1 = new Producte("Ordinador portàtil", 800, 10);
$producte2 = new Producte("Telèfon intel·ligent", 500, 15);

// Creem la tenda virtual
$tenda = new TendaVirtual();
$tenda->imprimirStock();

// Afegim productes a la tenda
$tenda->afegirProducte($producte1);
$tenda->afegirProducte($producte2);
$tenda->imprimirStock();

// Realitzem operacions de prova
$tenda->comprarProducte("Ordinador portàtil", 3);
$tenda->imprimirStock();
$tenda->canviarPreuProducte("Telèfon intel·ligent", 550);
$tenda->imprimirStock();
$tenda->augmentarStockProducte("Ordinador portàtil", 5);
$tenda->imprimirStock();

# EXERCICI 4
echo "<br><h3>EXERCICI 4</h3>";
class Alumne
{
    public $id;
    public $nom;
    public $edat;
    public $curs;
    public $assignaturesMatriculades = [];

    public function mostrarDades()
    {
        echo "Alumne: $this->nom - Edat: $this->edat - Curs: $this->curs<br>";
    }
}

class Assignatura
{
    public $nom;
    public $horesLectives;

    public function mostrarDades()
    {
        echo "Assignatura: $this->nom - Hores lectives: $this->horesLectives<br>";
    }
}

class Escola
{
    public $alumnes = [];
    public $assignatures = [];

    public function afegirAlumne($nom, $edat, $curs)
    {
        $alumne = new Alumne();
        $alumne->id = count($this->alumnes) + 1;
        $alumne->nom = $nom;
        $alumne->edat = $edat;
        $alumne->curs = $curs;

        $this->alumnes[] = $alumne;
        echo "Alumne afegit: $nom<br>";
    }

    public function afegirAssignatura($nom, $horesLectives)
    {
        $assignatura = new Assignatura();
        $assignatura->nom = $nom;
        $assignatura->horesLectives = $horesLectives;

        $this->assignatures[$nom] = $assignatura;
        echo "Assignatura afegida: $nom<br>";
    }

    public function matricularAlumne($alumneId, $assignaturaNom)
    {
        if (isset($this->alumnes[$alumneId]) && isset($this->assignatures[$assignaturaNom])) {
            $alumne = $this->alumnes[$alumneId];
            $assignatura = $this->assignatures[$assignaturaNom];
            $alumne->assignaturesMatriculades[$assignaturaNom] = $assignatura;
            echo "Alumne matriculat a $assignaturaNom<br>";
        } else {
            echo "Error: Alumne o assignatura no trobats<br>";
        }
    }

    public function mostrarDadesCompletes()
    {
        echo "Dades completes de l'escola:<br>";

        foreach ($this->assignatures as $assignatura) {
            $assignatura->mostrarDades();
            echo "Alumnes matriculats a {$assignatura->nom}:<br>";

            foreach ($this->alumnes as $alumne) {
                if (isset($alumne->assignaturesMatriculades[$assignatura->nom])) {
                    $alumne->mostrarDades();
                }
            }
            echo "<br>";
        }

        echo "Alumnes sense cap assignatura matriculada:<br>";
        foreach ($this->alumnes as $alumne) {
            if (empty($alumne->assignaturesMatriculades)) {
                $alumne->mostrarDades();
            }
        }
    }
}

// Crear una instància de la classe Escola
$escola = new Escola();

// Afegir alguns alumnes i assignatures
$escola->afegirAlumne("Marc", 15, "4t ESO");
$escola->afegirAlumne("Anna", 16, "1r Batxillerat");
$escola->afegirAssignatura("Matemàtiques", 4);
$escola->afegirAssignatura("Història", 3);

// Matricular alguns alumnes a algunes assignatures
$escola->matricularAlumne(1, "Matemàtiques");
$escola->matricularAlumne(1, "Història");
$escola->matricularAlumne(2, "Matemàtiques");

// Mostrar dades completes de l'escola
$escola->mostrarDadesCompletes();

?>

</html>