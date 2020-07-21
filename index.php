<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();
$app->addBodyParsingMiddleware();

/**
 * Routes
 */

$app->get('/hello', function ($request, $response, $args) {
    $renderer = new PhpRenderer('frontend/');
    return $renderer->render($response, "test.html", $args);
});

$app->get('/', function (Request $request, Response $response, $args){

    return $this->view->render($response, 'test.html', []);
    // $response->getBody()->write("Hello world!");
    // return $response;
});

$app->post('/api/test', function (Request $request, Response $response, $args) {
    $test = $request->getParsedBody();
    $response->getBody()->write($test['name']);
    //$response->getBody()->write("test!");
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(201);
});

$app->run();
