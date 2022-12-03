<?php
//namespaceはフォルダの名前を使う
namespace controllers;

use models\EmployesManager;
use PDO, PDOException, Exception;

class EmployesController{
    private $db;

    public function __construct(){
        $this->db = new \Models\EmployesManager();//je construis un objet "manager" que je stock dans la propriété $db
        //"manager"オブジェクトを作成し、$dbプロパティに格納します。
        //つまりコンストラクタで自動的にオブジェクトを作るたびに呼び出す
        //プロパティ db の中にインスタンス化したEmployesManager()クラスを格納することでプロパティ db　でEmployesManager()クラスを使うことができる。
        //EmployesManager()はpdoを継承しているCRUDのファイル
    }

    public function run(){
        // $_GET['op'] を取得します。もし存在しない場合は'list' を用います。
        // $_GET['op']は'employes;views.php'
        //このfunction run()はindex.phpで起動されている
        $op = $_GET['op'] ?? 'list';// routeur en fonction des 'cases' je lance la méthode correspondante dans mon controller
        // switch case メソッドで、コントローラ内で対応するメソッドを起動します。
        switch ($op){
            case 'list' :
                $this->listAll();
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
    //これでテーブツにある全てのデータが返ってくる
    // モデルフォルダに存在するselectAll()メソッドを呼び出すメソッド
    //'views/employes.views.php'ファイルに$donnees（テーブルのデータ）が返ってくる
    public function listAll(){// méthode qui fait appel à la méthode selectAll() présente dans le modèle
        $donnees = $this->db->selectAll();// on passe par db pour atteindre la méthode selectAll()
        //db = new \Models\EmployesManager();からのpublic function selectAll()
        // selectAll()メソッドに到達するためにdbを通過します。
        //selectAll()メソッドにはquery("SELECT * FROM employes")が入っている
        require('views/employes.view.php');//on précise la vue à afficher //表示するビューを指定する
    }

    //INSERTはここでする！$_POSTでユーザーが入力した内容
    public function register(){
        // on va gérer insertion et modification d'un employé
        // un employéの挿入(insertion)と変更(modification)を管理します
        if ($_GET['op'] == 'edit' && !empty($_GET['id']) && is_numeric($_GET['id']) ){
                $current = $this->db->select($_GET['id']);
            }

        //$_POSTのコントロール。ちゃんと入力されているかどうかのチェック
        if(!empty($_POST)){

            $current = (object) $_POST; //  transformation du tableau post en objet
            // traite les infos du formulaire dans le but d'appeler l'insertion en BDD controles
            // $_POSTのテーブルをオブジェクトに変換し、DBへの挿入を呼び出すためにフォーム情報を処理する コントロール

            $errors = array();
            $champs_vides = 0;

            //ちゃんと必要な入力情報が全部記入されているかをチェックする
            foreach ($_POST as $key=>$value){
                $_POST[$key] = htmlspecialchars($value);
                if(trim($_POST[$key]) == '') $champs_vides++;
                // j'incremente mon compteur de champs vides chaque fois que je detecte un champ non rempli
                // 未入力のフィールドを検出するたびに、空のフィールドカウンタ($champs_vides)をインクリメント(++)する
            }

            if ($champs_vides > 0){
                $errors[] = "Il manque $champs_vides information(s)";
            }
            // autres controles
            //上の入力チェック（記入漏れがないか）が大丈夫な場合の処理
            if(empty($errors)){
                // Cas d'ajout d'un employé //un employéを追加
                //op=operation
                if($_GET['op'] == 'new'){
                    // insertion
                    $this->db->insert($_POST);
                }
                if($_GET['op'] == 'edit' && !empty($_GET['id']) && is_numeric($_GET['id'])){
                    $this->db->update($_GET['id'], $_POST);
                }
                header('location:?op=list');
            }
        }
        require('views/formulaire.view.php');
    }

    public function delete(){

        if ($_GET['op'] == 'delete' && !empty($_GET['id']) && is_numeric($_GET['id']) ){
            $this->db->delete($_GET['id']);
        }
        header('location:?op=list');
    }
}

