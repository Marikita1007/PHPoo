<?php
//déclarer la fonction qui designe l'autoloader
spl_autoload_register('inclusionAutomatique');

function inclusionAutomatique($nomdelaclasse){
    //A => A.php
    // Modules\B => Modules/B.php
    $nomdelaclasse = str_replace('\\', '/', $nomdelaclasse);// On remplace les backslash par des slash pour
    // recomposer le chemin exact
    require_once ($nomdelaclasse . '.php');
}