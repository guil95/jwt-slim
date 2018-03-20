<?php

use Tuupola\Middleware\JwtAuthentication;
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
// $app->add(new JwtAuthentication([
//     "regexp" => "/(.*)/", //Regex para encontrar o Token nos Headers - Livre
//     "header" => "X-Token", //O Header que vai conter o token
//     "path" => "/", //Vamos cobrir toda a API a partir do /
//     "passthrough" => ["/auth"], //Vamos adicionar a exceção de cobertura a rota /auth
//     "realm" => "Protected", 
//     "secret" => $container['secretkey'] //Nosso secretkey criado 
// ]));