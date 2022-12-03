<?php

class Pompe{
    private $tailleReservoir;
    private $nbLitresEssence;

    public function __construct($r, $n){
        $this->setTailleReservoir($r);
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

    public function delivrerEssence(Voiture $v){//envoie en argument une classe. controllers'est au travers du nom de variable
        // et de l'opérateur -> qu'on accede aux méthodes de l'objet voiture
        //クラスを引数として送信します。 それは、変数名と -> 演算子を使って、car オブジェクトのメソッドにアクセスします。
        //45                        //50                        //5
        $quantite_a_delivrer =  $v->getTailleReservoir() - $v->getNbLitresEssence();//je déduis le nombre de litre
        // déjà présent dans le réservoir (valeur envoyé dans le constructeur au moment de l'instanciation)
        // すでにタンクに入っているリットル数を差し引く（インスタンス作成時にコンストラクタに送られる値）。
        // si je n'ai pas assez dans la pompe je rectifie la quantité en attribuant ce qui me reste
        if ($quantite_a_delivrer > $this->getNbLitresEssence()){
            $quantite_a_delivrer = $this->getNbLitresEssence();
        }

        // affecte la nouvelle valeur à nbLitresEssence de voiture
        // 車の nbLitresEssence に新しい値を割り当てます。
        $v->setNbLitresEssence($v->getNbLitresEssence()+ $quantite_a_delivrer);

        // affecte la nouvelle valeur à nbLitresEssence de pompe
        // pompeのnbLitresEssenceに新しい値を割り当てる
        $this->setNbLitresEssence($this->getNbLitresEssence()- $quantite_a_delivrer);

        return "Je viens de délivrer $quantite_a_delivrer litres d'essence <br>";
    }

}

