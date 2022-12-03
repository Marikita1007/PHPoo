<?php

interface Mouvement{
    public function turnRight();
    public function turnLeft();
}

class Bateau implements Mouvement{
    public function turnLeft()
    {
        // code
    }
    public function turnRight()
    {
        // code
    }
}

class Moto implements Mouvement{
    public function turnLeft()
    {
        // code
    }
    public function turnRight()
    {
        // code
    }
}
/**
 * Toutes les classes qui vont implémenter l'interface devront redéfinir toutes les méthodes imposé
 */

interface Carburant{
    public function ravitailler();
}

class Camion implements Mouvement, Carburant{
    public function turnRight()
    {
        // code
    }
    public function turnLeft()
    {
        // code
    }
    public function ravitailler()
    {
        // code
    }
}

// héritage entre interfaces

interface iA{
    public function test1();
}
interface iB{
    public function test2();
}
interface iC extends iA, iB{
    public function test3();
}

class serieTests implements iC{
    public function test1()
    {
        // code
    }
    public function test2()
    {
        // code
    }
    public function test3()
    {
        // code
    }
}

class A{

}
// Une classe peut à la fois hériter d'une autre classe et implémenter une ou des interfaces
class B extends A implements iA{
    public function test1()
    {
        // TODO: Implement test1() method.
    }
}