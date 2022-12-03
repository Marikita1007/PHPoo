<?php

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
            die('Problème connexion BDD'); // die permet d'afficher et de stopper le script
        }
    }

    protected function getBdd()
    {
        if (self::$pdo === null){// je test si $pdo contient une instance PDO ("new PDO"). si elle est === à null je
            // déclanche la méthode setBdd() qui créera une instance
            self::setBdd();
        }
        return self::$pdo;
    }

}