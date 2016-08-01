<?php


require_once __DIR__.'/../vendor/autoload.php';

use Itb\Controller\MainController;


$app = new Silex\Application();
$app['debug'] = true;

/*$app->get('/', function() {
    return "teste";
});*/
$app->get('/', 'Itb\Controller\MainController::testAction');

$app->run();