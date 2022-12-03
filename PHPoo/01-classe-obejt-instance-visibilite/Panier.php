<?php

// protected et public peuvent redéfinir
// class = plan de fabrication
// クラスって何？ ＝ 生産計画（こういう風な工程で作るよ！こういうツールを使うよ！）
class Panier{

    public $nbProduits; // attributs ou propriétés　// 属性またはプロパティ（属性・プロパティとはクラス内の変数のこと）

    public function ajouterArticle(){ // méthode　// 方法
        return "L'article a été ajouté !";//traitement　//処理の様子・処理プロセス
    }

    public function retirerArticle(){
        return "L'article a été ";
    }
}

// objet crée à partir du plan - Les classes permettent la création d'objets
// 生産計画（クラス）から作成されたオブジェクト - クラスはオブジェクトの作成を可能にする
$panier1 = new Panier; // instanciation de la classe　クラスのインスタンス化
//インスタンス化ってなに？：インスタンス化とはnewするとも言う。クラス（設計図：生産計画）からインスタンス（実体）を作ること
var_dump($panier1);
echo'<br>';
//クラスのメソッドの名前を含む配列を返します。
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

/**
 * 一旦作成されたオブジェクトは独立しており、それぞれが独自のプロパティを持っています。彼らはすべてのメソッドにアクセスすることができます。
 * クラスで宣言された
 * $pdo->prepare()
 * $pdo->query()
 *
 * 視認性。
 * public - どこからでも（クラスの内外を問わず）アクセスできます。
 * private - クラス内でのみアクセス可能
 * protected - クラス内および継承されたクラス内でアクセス可能です。
 */