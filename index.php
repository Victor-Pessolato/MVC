<?php

$controller = filter_input(INPUT_GET, "controller", FILTER_SANITIZE_STRING);
$action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);

if (!empty($controller) && !empty($action)) {
    require_once "controllers/" . $controller . "_controller.php";
    $c = ucfirst($controller);
    $c::$action();
} else {
    require_once 'views/home.php';
}