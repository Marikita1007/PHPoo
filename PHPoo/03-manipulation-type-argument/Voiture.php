<?php
class Voiture{

    private $tailleReservoir;
    private $nbLitresEssence;

    //$rはsetTailleReservoir($taille)の$tailleを指す
    public function __construct($r, $n){
        $this->setTailleReservoir($r);//TailleReservoir＝タンクのサイズ
        $this->setNbLitresEssence($n);
    }

    public function setTailleReservoir($taille){
        if(is_numeric($taille)){
            $this->tailleReservoir = $taille;
        }
    }

    public function getTailleReservoir(){
        return $this->tailleReservoir;
    }

    public function setNbLitresEssence($quantite){
        if(is_numeric($quantite)){
            $this->nbLitresEssence = $quantite;
        }
    }

    public function getNbLitresEssence(){
        return $this->nbLitresEssence;
    }
}