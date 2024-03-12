<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once 'Impianto.php';
require_once 'DispositivodiAllarme.php';
require_once "rilevatori.php";
require_once "RilevatoreDiPressione.php";
require_once "RilevatoreDiUmidita.php";

Class ImpiantoController{

    public function index(Request $request, Response $response, $args){
        $impianto = new Impianto("numero 0","2.0","40.1");

        $response->getBody()->write(json_encode($impianto));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function getallarme(Request $request, Response $response, $args){
        $impianto = new Impianto("numero 1", "2.0", "10.0");

        $response->getBody()->write(json_encode($impianto->getDispositiviDiAllarme()));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function identificativodispositivo(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $allarme = new DispositivoDiAllarme("numero 0");
        $impianto -> aggiungiDispositivo($allarme);

        $allarme = $impianto -> getIdentificativo($args["identificativo"]);

        $response->getBody()->write(json_encode($allarme));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function identificativoPressione(Request $request, Response $response, $args){
        $impianto = new Impianto("numero 2", "40.22", "55.55");
        $rilevatore = new RilevatoreDiPressione("aria");
        $impianto -> aggiungi($rilevatore);

        $rilevatore = $impianto -> getIdentificativo($args["identificativo"]);

        $response->getBody()->write(json_encode($rilevatore));
        return $response -> withHeader('Content-Type', 'application/json');
    }







}