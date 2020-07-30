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

// Load .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// DI
$container = new Container();
AppFactory::setContainer($container);

$container->set('actions', function () {
    $database = new Dibi\Connection([
        'driver'   => $_ENV['DB_DRIVER'],
        'host'     => $_ENV['DB_HOST'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'database' => $_ENV['DB_DATABASE'],
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

// Set the base path of the Slim App
$basePath = str_replace('/' . basename(__FILE__), '', $_SERVER['SCRIPT_NAME']);
$app = $app->setBasePath($basePath);

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

    $now = time(); // or your date as well
    $your_date = strtotime("2020-09-30");
    $datediff = $your_date - $now;

    $days = round($datediff / (60 * 60 * 24));


    // Celkovy pocet hlasu
    $actions = $this->get('actions');
    $votes_count = $actions->votesCount();

    return $this->get('renderer')->render($response, "main.php", [
        'nameKey' => $nameKey,
        'valueKey' => $valueKey,
        'name' => $name,
        'value' => $value,
        'votes_count' => $votes_count,
        'days' => $days,

    ]);
});

/**
 * POST route to vote
 */
$app->post('/api/vote', function (Request $request, Response $response) {
    // Request Body
    $payload = $request->getParsedBody();
    $project_id = array_key_exists('project_id', $payload) ? $payload['project_id'] : null;
    $email = array_key_exists('email', $payload) ? $payload['email'] : null;

    // Nevalidni email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !$project_id) {
        $response->getBody()->write(json_encode(['error_type' => 1, 'status' => 'E-mail musí být vyplněný a ve správném formátu.']));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(400);
    }

    // Zkusit vlozit do DB
    $actions = $this->get('actions');
    try {
        $id = $actions->vote($project_id, $email);
    }catch (Dibi\UniqueConstraintViolationException $e){
        $response->getBody()->write(json_encode(['error_type' => 2, 'status' => 'Pomocí tohoto e-mailu již nelze hlasovat.']));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(400);
    }

    // Everything should be fine, return 201
    $response->getBody()->write(json_encode(['status' => 'Váš hlas jsme úspěšně zpracovali.']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(201);
});

/**
 * Ukaze vysledky pod heslem
 */
$app->get('/vysledky', function (Request $request, Response $response) {
    $actions = $this->get('actions');
    $votes_projects = $actions->votesProjects();

    return $this->get('renderer')->render($response, "vysledky.php", [
        'votes_projects' => $votes_projects
    ]);
});


/**
 * 
 *  _  _    ___  _  _   
 * | || |  / _ \| || |  
 * | || |_| | | | || |_ 
 * |__   _| | | |__   _|
 *    | | | |_| |  | |  
 *    |_|  \___/   |_|  
 * 
 * Catch-all route to serve a 404 Not Found page if none of the routes match
 * NOTE: make sure this route is defined last
 */
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    return $this->get('renderer')->render($response, "404.html");
});

$app->run();
