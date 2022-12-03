<?php

require_once ('autoload.php');

// On va créer une instance de notre controller
// コントローラファイルをインスタンス化する！
//new Controllers\EmployesController = new namespace\ClassName;
$app = new Controllers\EmployesController;

// on lance notre application web
//ここでアプリを起動
$app->run();
//以下がrun()の内容
//public function run(){
//$_GET['op'] を取得します。もし存在しない場合は'list' を用います。つまりURLを検索するSwitch case
