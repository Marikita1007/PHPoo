<?php

//このファイル(つまりModelフォルダ内)でデータベースにアクセスする
namespace models;
//useキーワードには2つの目的があり、 一つはクラスにtraitを継承させることと、もう一つは名前空間(namespace)にエイリアス(別名)を与えることです。
use PDO, PDOException, Exception;//phpはpremadeのファイルPDO, PDOException, Exceptionがあり、それを使うためにここで呼んでいる

abstract class Model
{
    private static $pdo;

    private static function setBdd()
    {
        try {
            self::$pdo = new PDO("mysql:host=localhost; dbname=entreprise_mvc; charset=utf8",
                "root", "root",
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
                )
            );
        } catch (PDOException $e){
            die('Problème connexion BDD'); // die permet d'afficher et de stopper le script
        }
    }

    protected function getBdd()
    {//下記はsingleton　デフォがnullでそれがnullならなんか返す。
        if(self::$pdo === null){// je test si $pdo contient une instance PDO ("new PDO"). si elle est === à null je
            // déclanche la méthode setBdd() qui créera une instance
            // $pdo に PDO インスタンス ("new PDO") が含まれているかどうかをテストします。もし$pdo === null であれば、インスタンスを作成する setBdd() メソッドを実行します。
            self::setBdd();
        }
        return self::$pdo;
    }
}