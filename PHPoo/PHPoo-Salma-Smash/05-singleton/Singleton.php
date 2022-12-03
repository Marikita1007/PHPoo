<?php

/**
 * Design pattern : Solution ou réponse pré-établie répondant à un shéma particulier et qui résoud des problématique
 * similaires
 */

class Singleton {

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
         if(is_null(self::$instance)){
             self::$instance = new self; // creation de l'objet (= new Singleton() fait référence au nom de la classe
             // dans laquelle on se trouve
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