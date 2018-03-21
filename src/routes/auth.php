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

    $key = $this->get("secretkey");
   
    $token = array(
        "user" => "guilherme",
        "exp" => time() + 3600
    );
    $jwt = JWT::encode($token, $key);
    return $response->withJson(["auth-jwt" => $jwt], 200)
        ->withHeader('Content-type', 'application/json');   
});