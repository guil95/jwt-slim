<?php

$app->add(new Tuupola\Middleware\JwtAuthentication([
    "algorithm" => ["HS256", "HS384"],
    "attribute" => "jwt",
    "regexp" => "/(.*)/", //Regex para encontrar o Token nos Headers - Livre
    "header" => "X-Token", //O Header que vai conter o token
    "path" => "/", //Vamos cobrir toda a API a partir do /
    "ignore" => ["/auth"], //Vamos adicionar a exceção de cobertura a rota /auth 
    "secret" => $container["secretkey"],
    "secure" => false,
    "error" => function ($response, $arguments) {
        $data["message"] = "Falha na autenticação";
        return $response
            ->withHeader("Content-Type", "application/json")
            ->getBody()->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    }
]));
