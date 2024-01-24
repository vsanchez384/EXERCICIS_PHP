<?php
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
?>