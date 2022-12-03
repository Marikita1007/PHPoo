<?php

namespace controllers;

use models\EmployesManager;
use PDO, PDOException, Exception;

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
        }
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

        if (!empty($_POST)) {
            // var_dump($_POST);
            $current = (object) $_POST; //  transformation du tableau post en objet
            // traite les infos du formulaire dans le but d'appeler l'insertion en BDD
            // controles
            $errors = array();
            $champs_vides = 0;
            foreach ($_POST as $key => $value) {
                $_POST[$key] = htmlspecialchars($value);
                if (trim($_POST[$key]) == '') $champs_vides++;
                // j'incremente mon compteur de champs vides chaque fois que je detecte un champ non rempli
            }
            if ($champs_vides > 0) {
                $errors[] = 'Il manque ' . $champs_vides . ' information(s)';
            }
            // autres controles

            if (empty($errors)) {
                // Cas d'ajout d'un employé
                if ($_GET['op'] == 'new') {
                    // insertion
                    $this->db->insert($_POST);
                }
                if($_GET['op'] == 'edit' && !empty($_GET['id']) && is_numeric($_GET['id'])){
                    $this->db->update($_GET['id'], $_POST);
                }
                header('location:?op=list');
            }
        }

        require('views/formulaire.views.php');
    }

    public function delete(){

    }

}