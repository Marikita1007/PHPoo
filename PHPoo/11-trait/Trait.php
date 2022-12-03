<?php
/**
 * On trouve dans un trait des propriétés et des méthodes. Le principe des traits est de contourner les limites
 * imposés par l'héritage en PHP. Le but est de permettre de créer de nouvelles méthodes et de nouvelles propriétés
 * que l'on pourra ajouter à nos différentes classes
 */

/**
 * traitはシステムの限界を回避するのが特性の原理です。traitsの原理は、PHPでの継承による制限を回避することにあります。
 * 目的は、新しいメソッドや新しいプロパティを作成できるようにすることです。異なるクラスに追加することができます。
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
    //useでtraitクラスを使うことができる。この場合二つのクラスを呼んでる。
}

$site1 = new Site;
var_dump($site1);
echo "<br>";
var_dump(get_class_methods($site1));
echo "<br>";
echo $site1->seConnecter();
echo "<br>";
echo $site1->affichageProduit();


