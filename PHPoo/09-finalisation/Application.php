<?php

final class Application{
    public function lancementApplication(){
        return "L'application se lance comme ça";
    }
}

//we can't extend final
// class Extension extends Application{} Une classe final ne peut pas avoir d'héritiers
// class Extension extends Application{} 最後のクラスは継承者を持つことができません。

$app = new Application;
//echo $app->lancementApplication();

class Application2{
    final public function lancementApplication(){
        return "L'application se lance comme ça via la méthode finale";
    }
}

$app2 = new Application2;
echo $app2->lancementApplication();

echo '<hr>';

$app = new Application;
echo $app->lancementApplication();

// La finalisation vérouille le comportement d'une classe ou d'une méthode empêchant sa modification par héritage