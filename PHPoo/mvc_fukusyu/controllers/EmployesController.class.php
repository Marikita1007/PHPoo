<?php

namespace controllers;

use models\EmployesManager;
use PDO, PDOException, Exception;

class EmployesController{
    private $database;

    public function __construct(){
        $this->database = new \models\EmployesManager;
    }

    public function run(){
        // $_GET['op'] を取得します。もし存在しない場合は'list' を用います。
        $op = $_GET['op'] ?? 'list';// routeur en fonction des 'cases' je lance la méthode correspondante dans mon controller
        // 「ボックス」に応じて、コントローラ内で対応するメソッドを起動します。
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

    public function listAll(){
        $data = $this->database->selectAll();
        require('views/employes.views.php');
    }




}