<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
use Firebase\JWT\JWT;
//..
/**
 * HTTP Auth - Autenticação minimalista para retornar um JWT
 */
$app->get('/auth', function (Request $request, Response $response) use ($app) {
    //pode ser usuario e senha
    $key = $this->get("secretkey");

    $token = array(
        "user" => "@fidelissauro",
        "twitter" => "https://twitter.com/fidelissauro",
        "github" => "https://github.com/msfidelis"
    );
    $jwt = JWT::encode($token, $key);
    return $response->withJson(["auth-jwt" => $jwt], 200)
        ->withHeader('Content-type', 'application/json');   
});

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $teste = new \App\Teste();

    $retorno = $teste->teste();
    $newResponse = $response->withJson($retorno, 200);
    return $newResponse;
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->post('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $teste = new \App\Teste();

    $retorno = $teste->teste();
    $newResponse = $response->withJson($retorno, 200);
    return $newResponse;
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
