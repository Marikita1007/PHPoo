<?php
//déclarer la fonction qui designe l'autoloader //オートローダーを指定する関数を宣言する
spl_autoload_register('inclusionAutomatique');

function inclusionAutomatique($nomdelaclasse){
    //A => A.php
    // Modules\B => Modules/B.php
    $nomdelaclasse = str_replace('\\', '/', $nomdelaclasse);// On remplace les backslash par des slash pour // バックスラッシュをスラッシュに置き換える
    // recomposer le chemin exact // 正確なパスを再構成する
    require_once ($nomdelaclasse . '.php');
}