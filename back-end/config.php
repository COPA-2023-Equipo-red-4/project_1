<?php
require_once 'conexion.php';
/* servidores validados*/
$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
if (strpos($origin, 'vercel.app') !== false || $origin === 'http://localhost:8080') {
    header("Access-Control-Allow-Origin: $origin");
}

// Configuraciones adicionales CORS
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
header('Vary: Accept-Encoding');

define('DEV', true);
// Configurar las opciones de la cookie
$cookieParams = session_get_cookie_params();
$cookieParams['samesite'] = 'None';
$cookieParams['secure'] = true;

// Establecer las nuevas opciones de la cookie
session_set_cookie_params(
    $cookieParams['lifetime'],
    $cookieParams['path'],
    $cookieParams['domain'],
    $cookieParams['secure'],
    $cookieParams['httponly']
);

// Iniciar la sesión
session_start();

if (DEV) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}
function debug($debug)
{
    if (DEV) {
        echo '<pre>';
        var_dump($debug);
        echo '</pre>';
    }
}

function debugE($debug, $data = ' n/d')
{
    if (DEV) {
        echo '<pre>';

        var_dump($debug);
        echo '</pre>';
        echo PHP_EOL;
        echo ' Time: ' . time() . PHP_EOL . 'Data : ' . $data;
        exit();
    }
}
$conn = Connection::connect();
