<?php

echo date('d-m-Y');
echo '<hr>';
$datedujour = new DateTime();
var_dump($datedujour);
echo '<hr>';
echo $datedujour->format('d/m/Y H:i:s');
echo '<hr>';
$naufragetitanic = new DateTime('1912-04-14');
var_dump($naufragetitanic);
echo '<hr>';
echo $naufragetitanic->format('d/m/Y H:i:s')."<br>";

$intervalle = $datedujour->diff($naufragetitanic);
var_dump($intervalle);
echo '<hr>';

echo $intervalle->format('%y années %m mois'). "<br>";