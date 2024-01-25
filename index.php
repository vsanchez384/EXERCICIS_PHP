<html>
    <?php
    echo "<h1>EXERCICIS POO</h1>";
    
    # EXERCICI 1
    echo "<br>EXERCICI 1<br>" . "<br>";
    class Persona {
        public $nom;
        public $dataNaixement;
        public $dni;
        public $genere;

        public function saludar() {
            echo "{$this->nom} (DNI - {$this->dni} - {$this->dataNaixement} - {$this->genere}): Hola!<br>";
        }

        public function edat() {
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
    echo "<br>EXERCICI 2<br>" . "<br>";
    class Calculadora {
        // Mètodes per realitzar operacions bàsiques
        public function suma($a, $b) {
            return $a + $b;
        }
    
        public function resta($a, $b) {
            return $a - $b;
        }
    
        public function multiplicacio($a, $b) {
            return $a * $b;
        }
    
        public function divissio($a, $b) {
            // Manejar la divisió per zero
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Error: Divisió per zero.";
            }
        }
    
        public function potencia($base, $exponent) {
            return pow($base, $exponent);
        }
    
        public function factorial($n) {
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
    echo "<br>EXERCICI 3<br>" . "<br>";
    class Producte {
        public $nom;
        public $preu;
        public $stock;
    
        public function mostrarProducte() {
            echo "Nom: {$this->nom} - Preu: {$this->preu} - Estoc: {$this->stock}<br>";
        }
    }
    
    class Tenda {
        public $productes = [];
    
        public function afegirProducte($nom, $preu, $stock) {
            $producte = new Producte();
            $producte->nom = $nom;
            $producte->preu = $preu;
            $producte->stock = $stock;
    
            $this->productes[] = $producte;
            echo "Producte afegit: $nom<br>";
        }
    
        public function comprarProducte($nomProducte, $quantitat) {
            foreach ($this->productes as $producte) {
                if ($producte->nom == $nomProducte) {
                    if ($producte->stock >= $quantitat) {
                        $producte->stock -= $quantitat;
                        echo "Compra realitzada: $quantitat unitats de {$producte->nom}<br>";
                    } else {
                        echo "No hi ha prou estoc de {$producte->nom}<br>";
                    }
                    return;
                }
            }
            echo "Producte no trobat: $nomProducte<br>";
        }
    
        public function canviarPreuProducte($nomProducte, $nouPreu) {
            foreach ($this->productes as $producte) {
                if ($producte->nom == $nomProducte) {
                    $producte->preu = $nouPreu;
                    echo "Preu de {$producte->nom} actualitzat a $nouPreu<br>";
                    return;
                }
            }
            echo "Producte no trobat: $nomProducte<br>";
        }
    
        public function augmentarStockProducte($nomProducte, $quantitat) {
            foreach ($this->productes as $producte) {
                if ($producte->nom == $nomProducte) {
                    $producte->stock += $quantitat;
                    echo "Estoc de {$producte->nom} augmentat en $quantitat unitats<br>";
                    return;
                }
            }
            echo "Producte no trobat: $nomProducte<br>";
        }
    
        public function imprimirEstatTenda() {
            echo "Estat actual de la tenda:<br>";
            foreach ($this->productes as $producte) {
                $producte->mostrarProducte();
            }
        }
    }
    
    // Crear una instància de la classe Tenda
    $tenda = new Tenda();
    
    // Afegir alguns productes a la tenda
    $tenda->afegirProducte("Ordinador", 800, 10);
    $tenda->afegirProducte("Impressora", 150, 5);
    $tenda->afegirProducte("Ratolí", 20, 15);
    
    // Realitzar algunes operacions de prova
    $tenda->comprarProducte("Ordinador", 2);
    $tenda->canviarPreuProducte("Impressora", 160);
    $tenda->augmentarStockProducte("Ratolí", 5);
    
    // Mostrar l'estat actual de la tenda
    $tenda->imprimirEstatTenda();

    # EXERCICI 4
    echo "<br>EXERCICI 4<br>" . "<br>";
    class Alumne {
        public $id;
        public $nom;
        public $edat;
        public $curs;
        public $assignaturesMatriculades = [];
    
        public function mostrarDades() {
            echo "Alumne: $this->nom - Edat: $this->edat - Curs: $this->curs<br>";
        }
    }
    
    class Assignatura {
        public $nom;
        public $horesLectives;
    
        public function mostrarDades() {
            echo "Assignatura: $this->nom - Hores lectives: $this->horesLectives<br>";
        }
    }
    
    class Escola {
        public $alumnes = [];
        public $assignatures = [];
    
        public function afegirAlumne($nom, $edat, $curs) {
            $alumne = new Alumne();
            $alumne->id = count($this->alumnes) + 1;
            $alumne->nom = $nom;
            $alumne->edat = $edat;
            $alumne->curs = $curs;
    
            $this->alumnes[] = $alumne;
            echo "Alumne afegit: $nom<br>";
        }
    
        public function afegirAssignatura($nom, $horesLectives) {
            $assignatura = new Assignatura();
            $assignatura->nom = $nom;
            $assignatura->horesLectives = $horesLectives;
    
            $this->assignatures[$nom] = $assignatura;
            echo "Assignatura afegida: $nom<br>";
        }
    
        public function matricularAlumne($alumneId, $assignaturaNom) {
            if (isset($this->alumnes[$alumneId]) && isset($this->assignatures[$assignaturaNom])) {
                $alumne = $this->alumnes[$alumneId];
                $assignatura = $this->assignatures[$assignaturaNom];
                $alumne->assignaturesMatriculades[$assignaturaNom] = $assignatura;
                echo "Alumne matriculat a $assignaturaNom<br>";
            } else {
                echo "Error: Alumne o assignatura no trobats<br>";
            }
        }
    
        public function mostrarDadesCompletes() {
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