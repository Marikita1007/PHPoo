<?php

class Autoload{
    //publicでどこでも使えるfunction
    //staticでインスタンス化しなくても呼び出せる（ClassName::staticMethod();）
    public static function autoIncluder($className){

        //ここでファイルの末尾をプロパティに入れる。
        $extention = ".class.php";

        //$classNameの中にある'\\'を'/'に変更
        $path = str_replace('\\', '/', $className).$extention;
        require $path;
    }
}

spl_autoload_register(array('Autoload','autoIncluder'));