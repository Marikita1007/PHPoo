<?php

//autoloadは
//class Autoloadはパスの名前でパスを探すからクラスの名前とファイルの名前は一緒にすること！
class Autoload{
    public static function inclusionAuto($className){
        // new Controllers\EmployesController
        // => Controllers/EmployesController.class.php
        $path = str_replace('\\', '/', $className) .'.class.php';
        require $path;
    }
}
//これでautoloadしてくれる。
spl_autoload_register(array('Autoload', 'inclusionAuto'));

//CV前に自主でやったバージョン
//spl_autoload_register('autoIncluder');
//
//function autoIncluder($className){
//    $extention = ".class.php";
//
//    $className = str_replace('\\','/', $className).$extention;
//    //var_dump($className);
//    if(!file_exists($className)){
//        return "File doesn't exist !";
//    }
//    require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/' . $className;
//}