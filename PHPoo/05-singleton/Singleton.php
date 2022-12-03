<?php

/**
 * Design pattern : Solution ou réponse pré-établie répondant à un shéma particulier et qui résoud des problématique
 * similaires
 */

/**
 * デザインパターン：特定のパターンに適合し、類似した問題を解決するためにあらかじめ用意された解決策や対応策のこと。
 * 類似
 */

//Singletonとはプロジェクト全体で単一のオブジェクトを持つこと
//現在のオブジェクトを参照するには$thisを使います。現在のクラスを参照するには self を使います。
//言い換えると、非静的(non static)なメンバーには $this->member を使い、静的(static)なメンバーには self::$member を使います。

class Singleton {

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self; // creation de l'objet (= new Singleton() fait référence au nom de la classe
            // dans laquelle on se trouve
            // オブジェクトの生成 (= new Singleton()) は、参加しているクラスの名前を参照します。
        }
        return self::$instance;
    }
}

$obj1 = Singleton::getInstance();
var_dump($obj1);
echo '<hr>';
$obj2 = Singleton::getInstance();
var_dump($obj2);

/**
 * L'objectif du singleton est d'avoir un objet unique tout le long du projet
 * ex : 1 connexion à la BDD
 *      1 entité correspondant à une personne physique
 */


/**
 * シングルトンの目的は、プロジェクト全体で単一のオブジェクトを持つことです。
 * 例：DBへの接続が1つの例
 * 物理的な人に相当する1つのエンティティ
 */