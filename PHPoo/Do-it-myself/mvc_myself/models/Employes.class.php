<?php
//データベースののコラムをプロパティに格納。
//コンストラクタで誰が入れてもどのコラムに何を入れるか明白にする。
//getter setterで何の値をセットしてどのプロパティを返すのかを明白にする。
//02-class-object-instance-visibiliteを参照
namespace models;
use PDO, PDOException, Exception;

//クラスはデータベースのテーブル名にする！こうするとSymphonyが使いやすいらしい
class Employes
{

    //データベースののコラム名をプロパティに格納する。
    private $id_employe;
    private $prenom;
    private $nom;
    private $salaire;

    //コンストラクタで誰が何入れてもどのコラムなのか分かるようにする。
    public function __construct($id_employe, $prenom, $nom, $salaire){
        $this->id_employes = $id_employe;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->salaire = $salaire;
    }

    //getterとsetterを使ってどの値がどの値を使ってどの値を返すかをメソッドにする！
    public function getIdEmploye()
    {
        return $this->id_employe;
    }

    public function setIdEmploye($id_employe)
    {
        $this->id_employe = $id_employe;
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