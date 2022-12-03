<?php
/**
 * On trouve dans un trait des propriétés et des méthodes. Le principe des traits est de contourner les limites
 * imposés par l'héritage en PHP. Le but est de permettre de créer de nouvelles méthodes et de nouvelles propriétés
 * que l'on pourra ajouter à nos différentes classes
 */

trait tPanier{
    public $nbProduit = 5;
    public function affichageProduit(){
        return "voici vos produits";
    }
}

trait tMembre{
    public $pseudo;
    public function seConnecter(){
        return "Je me connecte";
    }
}

//$t1 = new tPanier; un trait n'est pas instanciable

class Site{
    use tPanier, tMembre;// le mot use importe le contenu des traits
}

$site1 = new Site;
var_dump($site1);
var_dump(get_class_methods($site1));


