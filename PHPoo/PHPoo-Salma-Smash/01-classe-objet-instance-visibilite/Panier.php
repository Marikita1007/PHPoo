<?php

// class = plan de fabrication
class Panier{

    public $nbProduits; // attributs ou propriétés

    public function ajouterArticle(){ // méthode
        return "L'article a été ajouté !";//traitement
    }

    public function retirerArticle(){
        return "L'article a été retiré";
    }
}

// objet crée à partir du plan - Les classes permettent la création d'objets
$panier1 = new Panier; // instanciation de la classe
var_dump($panier1);
var_dump(get_class_methods($panier1));//Retourne un tableau contenant les noms des méthodes de la classe

$panier1->nbProduits = 5;
var_dump($panier1);
echo 'Il y a ' . $panier1->nbProduits . 'produits dans le panier<br>';

echo $panier1->ajouterArticle().'<br>';
echo $panier1->retirerArticle().'<br>';
$panier1->nbProduits = 6;
var_dump($panier1);
echo '<hr>';
$panier2 = new Panier;
$panier2->nbProduits = 8;
var_dump($panier2);
unset($panier1);
//var_dump($panier1);
echo '<hr>';
$panier3 = new Panier;
var_dump($panier3);

/**
 * Une fois créé, les objets sont indépendants et ont chacun leurs propriétés. Ils sont tous accès aux méthodes
 * déclarées dans la classe
 * $pdo->prepare()
 * $pdo->query()
 *
 * Visibilité :
 * public - accessible de partout (intérieur et à l'exterieur de la classe
 * private - accessible uniquement à l'intérieur de la calsse
 * protected - accessible à l'intérieur de la classe et dans les classes héritières.
 */