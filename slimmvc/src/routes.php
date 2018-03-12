<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/user/[{id}]', function (Request $request, Response $response, array $args) {
    $userController = new \App\Controller\UserController();
    $args = $userController->getUser($args['id']);

    return $this->renderer->render($response, 'user.phtml', $args);

});


