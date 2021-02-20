<?php

/**
 * Alvin Jose I. Orcullo
 * BSIT-3
 */

use controllers\ItemController;

require "../bootstrap.php";
require "../database.php";
require "../item_controller.php";

header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json; charset=UT8");
header("Access-Control-Allow-Methods: OPTIONS, GET, POST, PUT, DELETE");
header("Access-Control-Max-Age:3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$uri = explode('/', $uri);

$controller = new ItemController();
$response = $controller->process($uri);

header($response['status_code_header']);

echo $response['body'];

