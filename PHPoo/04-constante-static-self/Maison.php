<?php

class Maison {
    private static $nbPieces = 6; // appartient à la classe : attribut de classe
    //クラスに属しています：クラス属性
    public static $espaceTerrain = '500m²'; //appartient à la classe //クラスに属しています。
    public $couleur = 'blanc'; //appartient à l'objet //オブジェクトに属しています。
    const HAUTEUR = '10m'; //appartient à la classe　//クラスに属しています。
    private $nbPortes = 8; //appartient à l'objet　//オブジェクトに属しています。

    public static function getNbPieces(){ //methode de classe
        return self::$nbPieces;
    }

    public function getNbPortes(){
        return $this->nbPortes;
    }

}

echo "Nb Pièces : ". Maison::getNbPieces(). '<br>';
echo "Terrain : " .Maison::$espaceTerrain   .'<br>';
echo "Hauteur :" .Maison::HAUTEUR .'<br>'; // ::はconstとかstaticを使う時に書く

$maison1 = new Maison;
echo 'couleur : ' . $maison1->couleur .'<br>';
echo 'Nb Portes : ' . $maison1->getNbPortes() .'<br>';

/**
 * A l'intérieur d'une classe　クラス内
 * $this->element = objet
 * self::$element = classe
 *
 * A l'extérieur d'une classe　 クラス内
 * $objet->element = objet
 * Classe::$element = classe
 */

//echo $maison1->espaceTerrain;
//echo Maison::$couleur;

//exception 1
echo $maison1->getNbPieces().'<br>';

//exception 2
echo $maison1::$espaceTerrain;