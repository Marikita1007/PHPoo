<?php


class Compteur{
    public static $nbInstances = 0; //propriétés appartient à la classe (static self::)
    public $nbObjet = 0; // propriété appartient à l'objet ($this->)

    public function __construct(){
        self::$nbInstances++; //self représente la classe à l'intérieur de la classe
        $this->nbObjet++; // $this représente l'objet "courant" à l'intérieur de la classe
    }
}

$c1 = new Compteur;
$c2 = new Compteur;
$c3 = new Compteur;
$c4 = new Compteur;
$c5 = new Compteur;

//ksi j'essaie d'acceder à la propriété static $nbInstances je vois bien 5, cette propriété appartient à la classe et
// non pas à l'objet

echo "Nbre de fois que la classe a été instanciée : " . Compteur::$nbInstances ."<br>";

echo "Nbre de fois que l'objet c5 a été instanciée : ". $c5->nbObjet . "<br>";

// Pour ce qui est des modifications, lorsqu'une propriété appartien à l'objet et que nous la modifions, cette
// modification s'applique à l'objet uniquement. Quand une propriété apprtient à la classe et que nous la modifions
// cela sera répercuté sur tous les prochains objets émanant de cette classe.

//Nota :  Voir notion de late static binding https://www.youtube.com/watch?v=3TUFy27ofCY