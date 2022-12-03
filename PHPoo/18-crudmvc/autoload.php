<?php

class Autoload{
    public static function inclusionAuto($className){
        // new Controllers\EmployesController
        // => Controllers/EmployesController.class.php
        $path = str_replace('\\', '/', $className) .'.class.php';
        require $path;
    }
}

spl_autoload_register(array('Autoload', 'inclusionAuto'));