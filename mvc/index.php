<?php

/**
 * фронт контроллер
 */

require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI'];
$urlParts = explode('/', $url);

$controller = $urlParts[1] ?: 'Index';
$action = (empty($urlParts[2])) ? 'Default' : $urlParts[2];

try {
    $class = '\\App\\Controllers\\' . $controller;
    $ctrl = new $class;
    $ctrl->action($action);

} catch (\App\Exceptions\DbException $ex) {
    \App\Logger::writeLog($ex);
    $ctrl = new \App\Controllers\Errors();
    $ctrl->action('Default');


} catch (\App\Exceptions\Http404Exception $ex) {
    \App\Logger::writeLog($ex);
    http_response_code(404);
    die;
}