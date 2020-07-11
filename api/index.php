<?php
require_once "vendor/autoload.php";
require_once "controller.php";
require_once "model.php";
require_once 'config.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false
    ]
];

$c = new \Slim\Container($configuration);
$app = new Slim\App($c);

$c['modelo'] = function () {
 
$db = [
    'host' => $datas["host"],
    'dbname' => $datas["dbname"],
    'user' =>$datas["user"],
    'password' => $datas["password"]
];

    $datos = new Model($db);
    return $datos;
};

$basicAuth = new Tuupola\Middleware\HttpBasicAuthentication([
    "users" => 
    [
        $users["user"] => $users["password"] 
    ]
]);

$app->get("/socio/", "\Controller:listarSocios")->add($basicAuth); 
$app->get("/socio/{id}", "\Controller:obtenerSocio")->add($basicAuth);
$app->get("/seccion/", "\Controller:listarSecciones")->add($basicAuth);
$app->post("/socio/", "\Controller:agregarSocio")->add($basicAuth); 
$app->put("/socio/", "\Controller:modificarSocio")->add($basicAuth);
$app->delete("/socio/{id}", "\Controller:eliminarSocio")->add($basicAuth);
$app->get("/seccion/{id}", "\Controller:obtenerSeccion")->add($basicAuth);
$app->run();

?>