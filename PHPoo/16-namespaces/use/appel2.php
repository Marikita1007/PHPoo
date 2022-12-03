<?php

require_once ('lib2.php');

use NS\NOM\COMPOSE;// l'interpreteur fair de COMPOSE un alias du namespace NS\NOM\COMPOSE
// インタープリタは COMPOSE を名前空間 NS\NOM\COMPOSE のエイリアスとします。

$a = new COMPOSE\Maclasse;
$a->methode();
/**
 * un alias nommé COMPOSE a automatiquement été crée à partir de la dernière composante du namespace (\)
 * 最後のネームスペースコンポーネントからCOMPOSEという名前のエイリアスが自動的に作成されていました (\)
 */