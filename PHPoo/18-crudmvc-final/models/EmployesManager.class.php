<?php

namespace models;

use PDO, PDOException, Exception;

class EmployesManager extends Model
{
    private $idColumName;

    public function selectAll()
    {
        $query = Model::getBdd()->query("SELECT * FROM employes");
        $result = $query->fetchAll();
        return $result;
    }

    public function select($id){
        $query = Model::getBdd()->prepare("SELECT * FROM employes WHERE " . $this->getIdColumName() . "=:id");
        $query->execute(array (
            ':id' => $id
        ));
        $result = $query->fetch();
        return $result;
    }

    public function getIdColumName(){
        $query = Model::getBdd()->query("DESC employes"); // requête qui permet de récupérer la structure de la table
        $result = $query->fetch();//récupère le 1er champs qui est id_employe
        $this->idColumName = $result->Field; //Field correspond aux noms des champs
        return $this->idColumName;
    }

    public function delete($id){
        // requete préparée de suppression
        $query = Model::getBdd()->prepare("DELETE FROM employes WHERE " . $this->getIdColumName(). "=:id");
        return $query->execute(array(
            ':id' => $id
        ));
    }

    public function insert($infos)
    {
        // INSERT INTO employe (nom,prenom) VALUES (:nom, :prenom)

        $liste_colonnes = implode(',', array_keys($infos));//implode() Rassemble les éléments d'un tableau en une chaîne.
        $liste_marqueurs = implode(',:', array_keys($infos));//array_keys — Retourne toutes les clés ou un ensemble des clés d'un tableau
        $query = Model::getBdd()->prepare("INSERT INTO employes" . " ($liste_colonnes ) VALUES (:$liste_marqueurs)");
        if ($query->execute($infos)){
            return Model::getBdd()->lastInsertId();//Retourne l'identifiant de la dernière ligne insérée ou la valeur d'une séquence (fait partie de PDO)
        }else{
            return false;
        }
    }

    public function update($id, $infos){
        // UPDATE employes SET salaire = :salaire, nom=:nom WHERE id_employe = :id_employes
        $setListe = array();
        foreach(array_keys($infos) as $key){//array_keys — Retourne toutes les clés ou un ensemble des clés d'un tableau
            $setListe[] = "$key = :$key";
        }
        var_dump($infos);
        $newValues = implode(',' , $setListe);//implode() Rassemble les éléments d'un tableau en une chaîne. nom=:nom,prenom=:prenom, salaire=:salaire
        $query = Model::getBdd()->prepare("UPDATE employes SET $newValues WHERE " . $this->getIdColumName() . "=:id");
        $infos['id'] = $id;
        return $query->execute($infos);
    }

}