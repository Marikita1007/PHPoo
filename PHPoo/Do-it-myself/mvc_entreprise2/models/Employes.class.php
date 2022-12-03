<?php
namespace models;

//set get
class Employes{
    private $id_employe;
    private $prenom;
    private $nom;
    private $sexe;
    private $service;
    private $date_embauche;
    private $salaire;
    private $id_secteur;

    public function __construct( $id_employe, $prenom, $nom, $sexe, $service, $date_embauche, $salaire, $id_secteur){
        $this->id_employe = $id_employe;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->service = $service;
        $this->date_embauche = $date_embauche;
        $this->salaire = $salaire;
        $this->id_secteur = $id_secteur;
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

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }


    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    public function getService()
    {
        return $this->service;
    }

    public function setService($service)
    {
        $this->service = $service;
    }

    public function getDateEmbauche()
    {
        return $this->date_embauche;
    }

    public function setDateEmbauche($date_embauche)
    {
        $this->date_embauche = $date_embauche;
    }

    public function getIdSecteur()
    {
        return $this->id_secteur;
    }

    public function setIdSecteur($id_secteur)
    {
        $this->id_secteur = $id_secteur;
    }


}