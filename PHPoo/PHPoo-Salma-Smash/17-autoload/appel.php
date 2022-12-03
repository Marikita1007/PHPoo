<?php


 // require_once ('A.php');
//require_once ('Modules/B.php');
//require_once ('Modules/C.php');

require_once ('autoload.php');

$a = new A;
$b = new Modules\B; // Modules/B.php
$c = new Modules\C;
$d = new Modules\Sousmodules\D;

