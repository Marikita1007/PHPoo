<?php

//フォーラムとはスタックオーバーフローのようにユーザーがあるトピックについて知識を出し合うサイト

class Membre{
    public $pseudo;
    public $mdp;
    public function ecrireMessage(){}
    public function bloquerMembre(Membre $m){}
}
//一般ユーザーより権威のあるユーザー（このクラスでユーザー拒否できる）
class Moderateur extends Membre{
    public function bannirUtilisateur(){}
}

//アドミン、つまり一番権威のあるユーザー。モデレーターの名前をつけたりfunction nommerModerateur()、
//バックオフィスも見ることができる。（ユーザーの名前やニックネーム等）
// la classe Administrateur héritant de Modérateur qui lui-même hérite de Membre cotiendra toutes les propriétés et
// méthodes "accumulées"
// Memberを継承(extends)したModeratorを継承したAdministratorクラスは、すべてのプロパティと メソッド
class Administrateur extends Moderateur{
    public function nommerModerateur(){}
    public function accesBackOffice(){}
}

$admin = new Administrateur;
var_dump($admin);
echo '<hr>';
var_dump(get_class_methods($admin));