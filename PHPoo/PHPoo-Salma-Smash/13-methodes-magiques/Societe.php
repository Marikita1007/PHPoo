<?php

/**
 * Méthode magiques : méthode qui s'exécutent automatiquement dans certaines conditions
 */

class Societe{
    public $adresse;
    public $cp;
    public $ville;

    public function __construct($mavar){
        echo "JE suis déclanché et je suis $mavar <br>";
    }

    public function __set($name, $value){
        // se déclanche sur tentative de creation de propriété non prévue à la classe
        echo "vous tentez d'ajouter $value dans $name, mais cette propriété n'existe pas <br>";
    }

    public function __get($name){
        // se déclanche sur tentative d'affichage d'une propriété qui n'existe pas
        echo "Vous tentez d'afficher la propriété $name mais elle n'existe pas <br>";
    }

    public function __call($name, $args){
        // se déclanche sur tentative d'exécution d'une méthode qui n'existe pas
        echo "Vous tentez de lancer $name mais elle n'xiste pas, les paramêtre étaient " . implode(',', $args)
    ."<br> ";
    }
    public function __clone(){
        // se déclanche sur utilisation de la fonction clone
        echo "clonage détecté";
    }
}

$soc1 = new Societe('Afpa');
$soc1->ville = 'Marseille';
$soc1->pays = 'France'; //__set
echo $soc1->ville . '<br>';
echo $soc1->telephone . '<br>';//__get
echo $soc1->scrogneugneu('titi', 12, 'tata');//__call

$soc2 = clone $soc1; // __clone