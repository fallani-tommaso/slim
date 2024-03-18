<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
function autoload($className)
{
    $paths=['/', '/classes', '/controllers'];
    foreach($paths as $path)
    {
        $file = __DIR__.$path."/$className.php";
        if(file_exists($file))
        {
            require_once($file);
            break;
        }
    }
}
spl_autoload_register("autoload");
$app = AppFactory::create();

//punto 1
$app->get('/negozio', "NegozioController:getDatiNegozio");

//punto 2
$app->get('/articoli', "NegozioController:getArticoli");

//punto 3
$app->get('/articoli/{identificativo}', "NegozioController:getArticoliDati");

//punto 4
$app->get('/ordini', "NegozioController:getOrdini");

//punto 4
$app->get('/ordini/{numero_ordine}', "NegozioController:getOrdiniDati");

$app->run();

?>