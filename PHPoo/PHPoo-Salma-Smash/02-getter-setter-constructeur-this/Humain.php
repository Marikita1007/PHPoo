<?php

class Humain
{
    // En vertu du principe d'encapsulation, il ne serait pas correct d'avoir une visibilité public
    private $prenom;
    private $nom;

    //constructeur

    public function __construct($p=null, $n=null){
        $this->setNom($n);
        $this->setPrenom($p);
    }

    //Les propriétés étant 'private' il est nécessaire de passer par des méthodes publiques pour lire et écrire ces
    // propriétés. On parle de Getter (Lire) et de Setter (ecrire). Un accès public à un attribut permet au
    // développeur d'y affecter n'importe quelle valeur, tandis qu'un accès  restreint à l'attribut forcera le
    // développeurà passer par un set pour affecter une valeur et cela permettra entre temps de controller et
    // d'assurer le type, le format, la taille etc...
    //$this désigne l'objet courant à l'interieur de la classe

    // setter : je viens attribuer une valeur. Les manipulateur (ou mutateurs) permettent de changer l'état de donnée
    // en vérifiant si la valeur que nous voulons apporter respecte les normes de celle-ci

    // getter : je viens récupérer la valeur. les accesseurs permettent de récupérer la valeur de données privées
    // sans y acceder directement.

    public function setPrenom($p){
        if (is_string($p)){
            $this->prenom = $p;
        }
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setNom($n){
        if (is_string($n)){
            $this->nom = $n;
        }
    }

    public function getNom(){
        return $this->nom;
    }
}

$personne1 = new Humain();
//$personne1->prenom = 'Salma';// ce n'est pas possible car la propriété est privée

$personne1->setPrenom('Salma');
echo $personne1->getPrenom();
$personne1->setNom('felouki');
echo $personne1->getNom();
var_dump($personne1);
echo '<hr>';

$personnage2 = new Humain('John', 'Doe');

echo "Je m'apelle " . $personnage2->getPrenom() . ' ' . $personnage2->getNom(). '<br>';