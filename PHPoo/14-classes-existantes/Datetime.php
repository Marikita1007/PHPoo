<?php

date_default_timezone_set('Europe/Paris');
echo date('d-m-Y');
echo '<hr>';

$datedujour = new DateTime();
var_dump($datedujour);
echo $datedujour->format('d/m/Y H:i:s');
echo '<hr>';

//$タイタニック難破日
$naufragetitanic = new DateTime('1912-04-14');
echo $naufragetitanic->format('d/m/Y H:i:s').'<br>';
echo '<hr>';

$intervalle = $datedujour->diff($naufragetitanic);
var_dump($intervalle);
echo '<hr>';

//$タイタニック難破から何年何ヶ月か表示する
echo $intervalle->format('%y années %m mois %d dates').'<br>';