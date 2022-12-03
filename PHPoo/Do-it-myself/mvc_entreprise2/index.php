<?php

require_once ('autoload.php');

// On va créer une instance de notre controller
$app = new Controllers\EmployesController;

// on lance notre application web
$app->run();