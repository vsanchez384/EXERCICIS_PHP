<?php
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
?>
