<?php

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

class Employes{
    private $id_employe;
    private $prenom;
    private $nom;
    private $salaire;

    public function __construct( $id_employe, $prenom, $nom, $salaire){
        $this->id_employe = $id_employe;
        $this->prenom = $prenom;
        $this->nom= $nom;
        $this->salaire = $salaire;
    }

    public function getId()// les attributs sont en private donc il faut passer par le getter
    {
        return $this->id_employe;
    }

    public function setId($id)
    {
        $this->id_employe = $id;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getSalaire()
    {
        return $this->salaire;
    }


    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }


}

class EmployesManager extends Model
{
    private $idColumName;

    public function selectAll()
    {
        $query = Model::getBdd()->query("SELECT * FROM employes");
        $result = $query->fetchAll();
        return $result;
    }

}

class EmployesController{
    private $db;

    public function __construct(){
        $this->db = new \Models\EmployesManager;//je construis un objet "manager" que je stock dans la propriété $db
    }

    public function run(){
        $op = $_GET['op'] ?? 'list';// routeur en fonction des 'cases' je lance la méthode correspondante dans mon controller

        switch ($op){
            case 'list' :
                $this->listeAll();
                break;
            case 'new':
            case 'edit':
                $this->register();
                break;
            case 'delete':
                $this->delete();
                break;
                ;        }
    }

    public function listeAll(){// méthode qui fait appel à la méthode selectAll() présente dans le modèle
        $donnees = $this->db->selectAll();// on passe par db pour atteindre la méthode selectAll()
        require('views/employes.views.php');//on précise la vue à afficher
    }

    public function register(){
        // on va gérer insertion et modification d'un employé

        if ($_GET['op'] == 'edit' && !empty($_GET['id']) && is_numeric($_GET['id']) ){
            $current = $this->db->select($_GET['id']);
        }

    }

}