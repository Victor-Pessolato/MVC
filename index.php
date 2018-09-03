<?php

$controller = filter_input(INPUT_GET, "controller", FILTER_SANITIZE_STRING);
$action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);

if ($controller === "actores") {
    require_once 'controllers/actores_controller.php';
    if ($action === "index") {
        Actores::index();
    }
    if ($action === "view") {
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        Actores::view($id);
    }
} else {
    require_once 'views/home.php';
}