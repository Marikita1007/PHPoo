<?php

namespace models;
use PDO, PDOException, Exception;

class EmployesManager extends Model{

    private $idColumName;

    public function selectAll(){
        $query = Model::getBdd()->query("SELECT * FROM employes");
        $result = $query->fetchAll();
        return $result;
    }

    public function insert($infos){
        //INSERT INTO employe(nom, prenom) VALUES (:nom, :prenom)
        $liste_colonnes = implode(',', array_keys($infos));
        $list_marqueurs = implode(',:', array_keys($infos));
        $query = Model::getBdd()->prepare("INSERT INTO Employes" . "($liste_colonnes) VALUES (:$list_marqueurs)");
        if($query->execute($infos)){
            return Model::getBdd()->lastInsertId();
        }else{
            return false;
        }
    }

    //updateとdeleteやる！
    public function update(){}

    public function delete($id){}



}