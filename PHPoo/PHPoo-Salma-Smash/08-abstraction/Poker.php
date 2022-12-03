<?php

abstract class Joueur{
    public function seConnecter(){
        return $this->etreMajeur();
    }

    abstract public function etreMajeur();// Les méthodes abstraites n'ont pas de corps/contenu, on termine par un ;

    abstract public function devise();
}

//$j = new Joueur; Une classe abstraite n'est pas instanciable

class JoueurFr extends Joueur{
    public function etreMajeur()// imposé par la classe dont j'hérite, je dois définir le corps de toutes les
        // méthodes abstraites
    {
        return 18;
    }
    public function devise()// imposé par la classe dont j'hérite
    {
        return '€';
    }
}

class JoueurUs extends Joueur{
    public function etreMajeur()// imposé par la classe dont j'hérite
    {
        return 21;
    }
    public function devise()// imposé par la classe dont j'hérite
    {
        return '$';
    }
}

/**
 * Une classe abstraite n'est pas instanciable. Une méthode abstraite (forcemment contenue dans une classe abstraite)
 * n'a pas de contenu mais impose d'être redéfinie dans la classe héritière
 * Une classe abstraite peut contenir des méthodes "normales"
 * Le développeur qui écrit la classe abstraite est au coeur de l'application et va imposer aux autres développeurs
 * qui vont utiliser sa classe des noms précis à utiliser et à redéfinir dans la classe héritière.
 */
$j1 = new JoueurFr;
$j2 = new JoueurUs;

echo $j1->seConnecter();
echo "<hr>";
echo $j2->seConnecter();