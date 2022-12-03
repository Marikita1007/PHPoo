<?php

require_once ('Voiture.php');
require_once ('Pompe.php');

$pompe = new Pompe(800, 800);
$voiture1 = new Voiture(50, 5);

// Départ

// Voiture
echo "Il y a " . $voiture1->getNbLitresEssence() . " litres dans le réservoir qui est d'une taille de ".
    $voiture1->getTailleReservoir(). " litres pour la voiture 1<br>";
// Pompe
echo "Il y a " . $pompe->getNbLitresEssence() . " litres dans le réservoir qui est d'une taille de ".
    $pompe->getTailleReservoir(). " litres pour la pompe<br>";

// simulation d'un passage à la pompe ポンプ走行のシミュレーション
echo '<hr>';
echo $pompe->delivrerEssence($voiture1);

// Après passage
echo "Il y a " . $voiture1->getNbLitresEssence() . " litres dans le réservoir qui est d'une taille de ".
    $voiture1->getTailleReservoir(). " litres pour la voiture 1<br>";
echo "Il y a " . $pompe->getNbLitresEssence() . " litres dans le réservoir qui est d'une taille de ".
    $pompe->getTailleReservoir(). " litres pour la pompe<br>";

echo '<hr>';
$voiture2 = new Voiture(70, 20);
echo $pompe->delivrerEssence($voiture2);

// Après passage
echo "Il y a " . $voiture2->getNbLitresEssence() . " litres dans le réservoir qui est d'une taille de ".
    $voiture2->getTailleReservoir(). " litres pour la voiture 2<br>";
echo "Il y a " . $pompe->getNbLitresEssence() . " litres dans le réservoir qui est d'une taille de ".
    $pompe->getTailleReservoir(). " litres pour la pompe<br>";