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

$app->get('/user/show/[{id}]', function (Request $request, Response $response, array $args) {
    $userController = new \App\Controller\UserController();
    $args = $userController->getUser($args['id']);

    return $this->renderer->render($response, 'user.phtml', $args);

});

// Create User
$app->get('/user/add', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'user/create.phtml', $args);

});

$app->post('/user/add', function (Request $request, Response $response, array $args) {
    $data = $request->getParsedBody();
    $userController = new \App\Controller\UserController();
    $userController->createUser($data['email'], $data['password']);

    return $this->renderer->render($response, 'index.phtml', $args);
});

// Delete user
$app->get('/user/delete/[{id}]', function (Request $request, Response $response, array $args) {
    $userController = new \App\Controller\UserController();
    $args = $userController->deleteUser($args['id']);
    return $this->renderer->render($response, 'confirmed.phtml', $args);

});

// Profiel
$app->get('/me/[{id}]', function (Request $request, Response $response, array $args) {
    $userController = new \App\Controller\UserController();
    $args = $userController->getUser($args['id']);

    return $this->renderer->render($response, 'me.phtml', $args);
});

$app->get('/me/change-password/[{id}]', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'change-password.phtml', $args);
});

$app->post('/me/change-password', function (Request $request, Response $response, array $args) {
    $data = $request->getParsedBody();
    $userController = new \App\Controller\UserController();
    $userController->updatePassword($data['id'], $data['o_password'], $data['new_password'], $data['rep_password']);

    return $response->withRedirect('/me/'.$data['id']);
});


