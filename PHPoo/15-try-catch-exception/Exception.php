<?php


$fruits = array('pomme', 'poire', 'banane');
var_dump(array_search('raisin', $fruits));

function recherche($elem, $tab){
    if (!is_array($tab)){
        throw new Exception("Vous devez envoyer un tableau");
    }
    return array_search($elem, $tab);
}

try{
    //echo recherche('banane', $fruits);
    echo recherche('blblbl', 'dddddddd');//この'dddddddd'のところに配列・tableau・arrayを入れていないから上のthrow new Exceptionが帰ってくる！
}catch(Exception $e){
    echo $e->getMessage(). "<br>";
}

echo "<hr>";

try{
    $pdo = new PDO('mysql:host=localhost;dbname=dial', 'root', 'root');
}catch(PDOException $e){
    //echo $e->getMessage();
    //echo $e->getFile();
    //echo $e->getLine();
    echo "Problème temporaire avec le serveur";
}

