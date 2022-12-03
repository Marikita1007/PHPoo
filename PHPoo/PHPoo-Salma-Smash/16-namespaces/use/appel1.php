<?php
require_once ('lib1.php');

use NAMESPACE_AU_NOM_VRAIMENT_TRES_LONG as A;// création d'un Alias avec le mot clef "as"

$a = new A\ClassA;
$a->maMethode();

echo '<hr>';
/**
 * as permet de créer un raccourci d'appel pour le namespace cela n'empêche pas l'utilisation du nom original complet
 */