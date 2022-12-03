<?php
namespace models;
use PDO, PDOException, Exception;
//dabase connection
abstract class Model
{
    //このクラスでしか使えないプロパティ
    //静的プロパティだからこれを使うときはself::
    private static $pdo;

    private static function setDb()
    {
        //trycatchでエラーがある場合に対処する。
        //try{データベースコネクション}catch (PDOException $e){die}はおまじないのようなもの
        try {

            self::$pdo = new PDO("mysql:host=localhost; dbname=mvc_enreprise_2; charset=utf8", "root", "",
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
                )
            );

        } catch (PDOException $e){
            die('Database connexion error');
        }
    }

    protected function getBdd()
    {
        //staticプロパティ$pdoはnullだった場合に上記のメソッドが始動する。
        if (self::$pdo === null){
            self::setDb();
        }
        return self::$pdo;
    }

}