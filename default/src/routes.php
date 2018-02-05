<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->post('/login', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/login' route");

    $body = $request->getParsedBody();
    $body['is_logged'] = ($body['email'] === "toto@gmail.com" && $body['password'] === "pass");
    return $this->renderer->render($response, 'login.phtml', $body);
});