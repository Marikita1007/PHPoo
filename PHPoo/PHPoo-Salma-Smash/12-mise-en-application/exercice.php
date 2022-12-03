<?php
/*
Créer les classes suivante : Dacia, Renault et Vehicule
La classe Vehicule possede les methodes demarrer(), carburant(), nbTestsObligatoires()
1. Faire en sorte que je ne puisse pas instancier Vehicule // cf chap 08
2. Obligation pour la Renault et la Dacia d'avoir la même méthode démarrer sans modification possible // cf chap 09
3. Obligation pour la Renault et la Dacia de déclarer la méthode carburant ( Renault Essence, Dacia GPL) // cf chap 08
4. La Renault devra effectuer 30 tests de plus qu'un véhicule de base (chap 07)
5. La Dacia devra effectuer 70 tests de plus qu'un véhicule de base (chap 07)
6. Faire les controles et affichages
*/

abstract class Vehicule{
    final public function demarrer(){
        return "je démarre";
    }
    abstract public function carburant();

    public function nbTestsObligatoires(){
        return 100;
    }
}

class Renault extends Vehicule{
    public function carburant(){
        return 'essence';
    }
    public function nbTestsObligatoires(){
        return parent::nbTestsObligatoires() + 30;
    }
}

class Dacia extends Vehicule{
    public function carburant(){
        return 'Diesel';
    }
    public function nbTestsObligatoires(){
        return parent::nbTestsObligatoires() + 70;
    }
}

$dacia = new Dacia;
echo $dacia->demarrer();