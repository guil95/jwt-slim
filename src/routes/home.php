<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($app){
    // Sample log message
    return $response->withJson([$args], 200)
    ->withHeader('Content-type', 'application/json'); 
});