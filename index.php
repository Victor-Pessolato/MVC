<?php

$controller = filter_input(INPUT_GET, "controller", FILTER_SANITIZE_STRING);
$action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);

if ($controller === "actores") {
    require_once 'controllers/actores_controller.php';
} else {
    require_once 'views/home.php';
}