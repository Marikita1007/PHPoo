<?php

abstract class Joueur{
    public function seConnecter(){
        return $this->etreMajeur();
    }

    abstract public function etreMajeur();// Les méthodes abstraites n'ont pas de corps/contenu, on termine par un ;
    // 抽象的なメソッドはボディ/コンテンツを持たず、一つで終わる
    abstract public function devise();
}

//$j = new Joueur; Une classe abstraite n'est pas instanciable
//$j = new Joueur; abstractクラスはインスタンス化できない

class JoueurFr extends Joueur{
    public function etreMajeur()// imposé par la classe dont j'hérite, je dois définir le corps de toutes les
        // méthodes abstraites
        // 継承したクラスから課せられる、すべての抽象メソッドの本体を定義しなければならない。
    {
        return 18;
    }
    public function devise()// imposé par la classe dont j'hérite // 継承するクラスによって課せられる
    {
        return '€';
    }
}

class JoueurUs extends Joueur{
    public function etreMajeur()// imposé par la classe dont j'hérite // 継承するクラスによって課せられる
    {
        return 21;
    }
    public function devise()// imposé par la classe dont j'hérite // 継承するクラスによって課せられる
    {
        return '$';
    }
}

/**
 * Une classe abstraite n'est pas instanciable. Une méthode abstraite (forcemment contenue dans une classe abstraite)
 * n'a pas de contenu mais impose d'être redéfinie dans la classe héritière
 * Une classe abstraite peut contenir des méthodes "normales"
 * Le développeur qui écrit la classe abstraite est au coeur de l'application et va imposer aux autres développeurs
 * qui vont utiliser sa classe des noms précis à utiliser et à redéfinir dans la classe héritière.
 */

/**
 * 抽象クラスはインスタンス化できません。抽象メソッドが抽象クラスに含まれる必要がある
 * 抽象クラスに含まれていないメソッドは内容がないが、継承したクラスで再定義する必要がある。
 * 抽象クラスは「通常の」メソッドを含むことができます。
 * 抽象クラスを書いた開発者は、アプリケーションの中心となり、他の開発者に押し付けることになります。
 * 抽象クラスを書いた開発者は、アプリケーションの中心となり、自分のクラスを使用する他の開発者に
 * 継承されたクラスで使用・再定義される正確な名前を課すことになります。
 */

$j1 = new JoueurFr;
$j2 = new JoueurUs;

echo $j1->seConnecter();
echo "<hr>";
echo $j2->seConnecter();

