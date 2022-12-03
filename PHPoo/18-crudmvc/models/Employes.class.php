<?php

namespace models;
use PDO, PDOException, Exception;

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