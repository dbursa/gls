<?php
use DI\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpNotFoundException;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Slim\Csrf\Guard;

require __DIR__ . '/vendor/autoload.php';

// Start PHP session
session_start();

// DI
$container = new Container();
AppFactory::setContainer($container);

$container->set('actions', function () {
    $database = new Dibi\Connection([
        'driver'   => 'mysqli',
        'host'     => '127.0.0.1',
        'username' => 'root',
        'password' => 'root',
        'database' => 'gls',
    ]);
    $actions = new Webinity\Actions($database);
    return $actions;
});

$container->set('renderer', function () {
    $renderer = new PhpRenderer('frontend/');
    return $renderer;
});

// App
$app = AppFactory::create();
$responseFactory = $app->getResponseFactory();

// Body Parsing middleware
$app->addBodyParsingMiddleware();

// Register Middleware On Container
$container->set('csrf', function () use ($responseFactory) {
    return new Guard($responseFactory);
});
$app->add('csrf'); // Execute on all routes



$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});
// Single Page Policy
$app->add(function ($request, $handler) {
    $response = $handler->handle($request);
    return $response
            ->withHeader('Access-Control-Allow-Origin', 'https://pomahame.gls-czech.cz')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});


/**
 * * * * * *
 * Routes * *
 * * * * * *
 */
$app->get('/', function (Request $request, Response $response, $args){
    // CSRF token name and value
    $csrf = $this->get('csrf');
    $nameKey = $csrf->getTokenNameKey();
    $valueKey = $csrf->getTokenValueKey();
    $name = $request->getAttribute($nameKey);
    $value = $request->getAttribute($valueKey);

    return $this->get('renderer')->render($response, "test.php", [
        'nameKey' => $nameKey,
        'valueKey' => $valueKey,
        'name' => $name,
        'value' => $value
    ]);
});

$app->post('/api/test', function (Request $request, Response $response, $args) {
    $test = $request->getParsedBody();
    //$response->getBody()->write($test['name']);
    $response->getBody()->write('testt');

    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(201);
});


/**
 * Catch-all route to serve a 404 Not Found page if none of the routes match
 * NOTE: make sure this route is defined last
 */
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    return $this->get('renderer')->render($response, "404.html");
});

$app->run();
