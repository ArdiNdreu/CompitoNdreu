<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once 'DispositivoDiAllarme.php';

Class DispositiviAllarmeController{

    public function index(Request $request, Response $response, $args){
        $impianto = new Impianto("numero 0", "10.0", "2.0");

        $response->getBody()->write(json_encode($impianto));


        return $response -> withHeader('Content-Type', 'application/json');
    }
    public function show(Request $request, Response $response, $args){
        $impianto = new Impianto("numero 1", "1.0", "2.0");
        

        $response->getBody()->write(json_encode($impianto));


        return $response -> withHeader('Content-Type', 'application/json');
    }
}
?>