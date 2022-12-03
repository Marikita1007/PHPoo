<?php
//このページでPDO！PDOのみ！

namespace models;

use PDO, PDOException, Exception;

abstract class Model
{
    private static $pdo;

    private static function setBdd()
    {
        try {
            self::$pdo = new PDO("mysql:host=localhost; dbname=entreprise_mvc; charset=utf8", "root", "root",
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
                )
            );
        } catch (PDOException $e){
            die('Problème connexion BDD');
        }
    }

    protected function getBdd()
    {
        if (self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }

}