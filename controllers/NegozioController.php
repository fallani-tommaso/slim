<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
class NegozioController{

    //punto 1
    public function getDatiNegozio(Request $request, Response $response, $args){
        $x = new Negozio();
        $x = $x->getDatiNegozio();
        $response->getBody()->write(json_encode($x));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }

    //punto 2
    public function getArticoli(Request $request, Response $response, $args){
        $x = new Negozio();
        $x = $x->getArticoli();
        $response->getBody()->write(json_encode($x));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }

    //punto 3
    public function getArticoliDati(Request $request, Response $response, $args){
        $x = new Negozio();
        $x = $x->getArticoliDati($args);
        $response->getBody()->write(json_encode($x));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }

    //punto 4
    public function getOrdini(Request $request, Response $response, $args){
        $x = new Negozio();
        $x = $x->getOrdini();
        $response->getBody()->write(json_encode($x));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }

    //punto 5
    public function getOrdiniDati(Request $request, Response $response, $args){
        $x = new Negozio();
        $x = $x->getOrdiniDati($args);
        $response->getBody()->write(json_encode($x));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }




}
?>