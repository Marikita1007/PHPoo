<?php

class Humain
{
    // En vertu du principe d'encapsulation, il ne serait pas correct d'avoir une visibilité public
    // カプセル化（パケットを包んだパケットにするよ）の原則により、公開（public）された可視性を持つことは正しくありません。だからここではprivateを使用する。
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
    // développeurà passer par un set pour affecter une valeur et cela permettra entre temps de controllers et
    // d'assurer le type, le format, la taille etc...
    //$this désigne l'objet courant à l'interieur de la classe

    // setter : je viens attribuer une valeur. Les manipulateur (ou mutateurs) permettent de changer l'état de donnée
    // en vérifiant si la valeur que nous voulons apporter respecte les normes de celle-ci

    // getter : je viens récupérer la valeur. les accesseurs permettent de récupérer la valeur de données privées
    // sans y acceder directement.

    //プロパティ（クラスの変数）は「プライベート」(private $prenom;)なので、パブリックなメソッドを使って読み書きする必要があります。
    // プロパティ ゲッター(Read)とセッター(Write)という言葉があります。ある属性へのパブリックアクセスにより
    // 開発者はこの属性に任意の値を割り当てることができますが、属性へのアクセスを制限することで
    // 開発者が値を割り当てるためにセットを通過することになり、これにより、コントローラとタイプ、フォーマット、サイズなどを確認するためなど・・・。
    //！！！！！！$this はクラス内の現在のオブジェクトです。！！！！！！！

    // setter(Write): setter君は値を割り当てるために来たよ。これらのマニピュレーター（またはミューテーター）は、
    //　私たちがもたらしたい価値が、その規範を尊重しているかどうかを確認することで、データの状態を変えることができます。

    // getter(Read) : getter君は値を取得しに来たよ。アクセッサは、直接アクセスせずに、プライベートデータの値を取得することができる。

    public function setPrenom($p){
        if (is_string($p)){
            $this->prenom = $p;//当分$this->は「このオブジェクトは」と訳す。
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
//$person1->firstname = 'Salma';// このプロパティはプライベートなので、これはできません。（エラーになる）

$personne1->setPrenom('Salma');
echo $personne1->getPrenom();
echo '<br>';
$personne1->setNom('felouki');
echo '<br>';
echo $personne1->getNom();
var_dump($personne1);
echo '<hr>';

$personnage2 = new Humain('John', 'Doe');

echo "Je m'apelle " . $personnage2->getPrenom() . ' ' . $personnage2->getNom(). '<br>';