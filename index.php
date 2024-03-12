<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include_once 'controllers/SiteController.php';
include_once 'controllers/ControllerImpianto.php';
include_once 'controllers/Dispositivoallarmecontroller.php';

$app = AppFactory::create();

$app->get('/ ',"");
$app->get('/impianto', 'Controllerimpianto:index');
$app->get('/impianto', 'Controllerimpianto:getallarme');
$app->get('/impianto', 'Controllerimpianto: identificativodispositivo');
$app->get('/impianto', 'Controllerimpianto: identificativoPressione');
$app->get('/impianto', 'Dispositivoallarmecontroller:index');
$app->get('/impianto', 'Dispositivoallarmecontroller:show');

$app->run();

?>
