<?php

class Animal{

    protected function deplacement() {
        return "Je me déplace sur 4 pattes";
    }

    public function manger(){
        return "Je mange 1 fois par jour";
    }
}

class Chien extends Animal{

    public function quiSuisJe(){
        return "Je suis un chien et " . $this->deplacement() . " et " . $this->manger() . "<br>";
    }
}

class Chat extends Chien {
    public function quiSuisJe()
    {
        return "I'm the best animal EVER!!";
    }
}

class Elephant extends Animal{

    public function manger(){ // redéfinition de méthode
        return "Je mange 2 fois par jour";
    }

    public function quiSuisJe(){
        return "Je suis un éléphant et " .$this->deplacement() . " et " . $this->manger() ."<br>";
    }

    public function description(){
        return "J'ai une trompe";
    }
}

$rex = new Chien;
echo $rex->quiSuisJe();
echo '<hr>';
echo $rex->manger();
echo '<hr>';
//echo $rex->deplacement(); // impossible car la méthode est protected

$cat = new Chat;
echo $cat->quiSuisJe();
echo '<hr>';
echo $cat->manger();
echo '<hr>';

$dumbo = new Elephant;
echo $dumbo->quiSuisJe();
echo '<hr>';
$dumbo2 = new Elephant();
echo $dumbo2->description();

/**
 * Lorsque l'on appelle une méthode d'une classe qui a un héritage,
 * l'interpréteur cherche d'abord dans la classe
 * dont l'objet est issu avant d'aller voir la classe parente
 */

/**
 * 継承しているクラスのメソッドを呼び出すとき、インタープリタはまずそのクラスの 親クラスに行く前に、
 * オブジェクトが派生したクラスである
 */