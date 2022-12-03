<?php

class PrixHT{
    public function calcul(){
        return 15;
    }
}

class PrixTTC extends PrixHT{
    public function calcul()
    {
        return parent::calcul() * 1.2;
    }
}

$prix1 = new PrixTTC();
echo $prix1->calcul();

// prudence, autre notation sans passer par une variable

echo (new PrixTTC)->calcul();