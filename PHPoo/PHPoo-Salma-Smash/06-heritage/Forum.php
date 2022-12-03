<?php

class Membre{
    public $pseudo;
    public $mdp;
    public function ecrireMessage(){}
    public function bloquerMembre(Membre $m){}
}

class Moderateur extends Membre{
    public function bannirUtilisateur(){}
}

// la classe Administrateur héritant de Modérateur qui lui-même hérite de Membre cotiendra toutes les propriétés et
// méthodes "accumulées"
class Administrateur extends Moderateur{
    public function nommerModerateur(){}
    public function accesBackOffice(){}
}

$admin = new Administrateur;
var_dump($admin);
echo '<hr>';
var_dump(get_class_methods($admin));