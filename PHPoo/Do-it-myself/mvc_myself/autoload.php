<?php

class Autoload{
    public static function autoInclude($className){
        $extention = ".class.php";
        $path = str_replace('\\','/', $className).$extention;

        //var_dump($path);
        if(!file_exists($path)){
            return false;
        }

        require $path;
    }
}

spl_autoload_register(array('Autoload', 'autoInclude'));
