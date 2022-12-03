<?php

namespace models;
use PDO, PDOException, Exception;

//データベースのテーブルと同じクラス名にすること！
class Employes
{
    private $id_employes;
    private $prenom;
    private $nom;
    private $salaire;

    public function __construct($id_employes, $prenom, $nom, $salaire){
        $this->id_employes=$id_employes;
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->salaire=$salaire;
    }

    //それぞれのアトリビュートのゲッターとセッター
    public function getId()
    {
        return $this->id_employes;// les attributs sont en private donc il faut passer par le getter
        // 属性（アトリビュート）はprivateなので、getterを経由する必要があります。
    }

    public function setId($id_employes)
    {
        $this->id_employes = $id_employes;
    }

    //right click,Generate,Getters and Setters
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