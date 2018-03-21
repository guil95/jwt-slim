<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/usuarios', function (Request $request, Response $response) use ($app) {
    return $response->withJson(["usuarios" => 'oi'], 200)
        ->withHeader('Content-type', 'application/json');   
});

$app->get('/usuarios/[{id}]', function (Request $request, Response $response, array $args) use ($app) {
    return $response->withJson(["usuarios" => $args], 200)
        ->withHeader('Content-type', 'application/json');   
});

$app->post('/usuarios', function (Request $request, Response $response) use ($app) {
    return $response->withJson(["usuarios" => 'oi'], 200)
        ->withHeader('Content-type', 'application/json');   
});