<?php


class Compteur{
    public static $nbInstances = 0; //propriétés appartient à la classe (static self::)
    //プロパティがクラスに属する（static self::)
    public $nbObjet = 0; // propriété appartient à l'objet ($this->)
    // プロパティはオブジェクトに属する($this->)

    public function __construct(){
        self::$nbInstances++; //self représente la classe à l'intérieur de la classe
        //self::はクラスの中のクラスを表す
        $this->nbObjet++; // $this représente l'objet "courant" à l'intérieur de la classe
        // $thisはクラス内の「現在の」オブジェクトを表します。
    }
}
$c1 = new Compteur;
$c2 = new Compteur;
$c3 = new Compteur;
$c4 = new Compteur;
$c5 = new Compteur;

//ksi j'essaie d'acceder à la propriété static $nbInstances je vois bien 5, cette propriété appartient à la classe et
// non pas à l'objet
//静的なプロパティ$nbInstancesにアクセスしようとすると、5が表示されます。

echo "Nbre de fois que la classe a été instanciée : " . Compteur::$nbInstances ."<br>";

echo "Nbre de fois que l'objet c5 a été instanciée : ". $c5->nbObjet . "<br>";

// Pour ce qui est des modifications, lorsqu'une propriété appartien à l'objet et que nous la modifions, cette
// modification s'applique à l'objet uniquement. Quand une propriété apprtient à la classe et que nous la modifions
// cela sera répercuté sur tous les prochains objets émanant de cette classe.
// 修正に関しては、あるプロパティがオブジェクトに属していて、それを修正した場合、この修正はオブジェクトにのみ適用されます。
// あるプロパティがクラスに属していて、それを変更すると、そのクラスから派生する次のオブジェクトすべてに反映されます。

//Nota :  Voir notion de late static binding https://www.youtube.com/watch?v=3TUFy27ofCY