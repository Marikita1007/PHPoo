<?php
//Model.class.phpの中にあるクラスModel(PDO)をextendsするEmployesMqnqgerをクラスを作成
//heritageだから06-heritage参照
//ここでCRUDをする！PDOのクラスModelを継承しているからCRUDできるよ！

namespace models;
use PDO, PDOException, Exception;


class EmployesManager extends Model
{
    private $idColumName;//これでコラムの配列の数字を返す？

    public function selectAll()
    {
        //Modelクラスにあるfunction getBdd()メソッドを使う！getBdd()はnullの場合pdoを起動する
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

    //query(DESC テーブル名)でテーブルの中にあるコラムを返すよ
    //$query->fetch()はfetchAll()でないから最初のコラムのみを変えよ
    public function getIdColumName(){
        $query = Model::getBdd()->query("DESC employes"); // requête qui permet de récupérer la structure de la table
        $result = $query->fetch();//récupère le 1er champs qui est id_employe
        //!!!!!!!!!!!!!!!!!!!!!!
        $this->idColumName = $result->Field; //Fieldは、フィールドの名前
        return $this->idColumName;
    }

    public function insert($infos)
    {
        // INSERT INTO employe (nom,prenom) VALUES (:nom, :prenom)

        //implode（）関数は、配列の要素から文字列を返す。
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
        $newValues = implode(',' , $setListe);//implode() Rassemble les éléments d'un tableau en une chaîne. nom=:nom,prenom=:prenom, salaire=:salaire
        $query = Model::getBdd()->prepare("UPDATE employes SET $newValues WHERE " . $this->getIdColumName() . "=:id");
        $infos['id'] = $id;
        return $query->execute($infos);
    }

    //自分で書いた削除CRUD!
    public function delete($id, $infos = array())
    {
        $query = Model::getBdd()->prepare("DELETE FROM employes WHERE " . $this->getIdColumName() . "=:id");
        $infos[':id'] = $id;
        return $query->execute($infos);
    }

}













