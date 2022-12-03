<?php
namespace General;

require_once('commerce.php');

use Commerce2, DateTime;
//import du namespace Commerce2
//use namespace1, namespace2, classe

echo __NAMESPACE__; // constante magique qui renvoie le namespace dans lequel je me trouve
//自分のいる名前空間を返すマジックコンスト
echo'<hr>';
$commande = new \Commerce1\Commande;
var_dump($commande);

echo'<hr>';
$produit1 = new Commerce2\Produit;
var_dump($produit1);

$maDate = new DateTime();
echo $maDate->format('Y-m-d H:i');