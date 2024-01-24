<?php
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
