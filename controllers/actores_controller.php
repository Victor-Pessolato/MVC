<?php

//Llamada al modelo
require_once("db/db.php");
require_once("models/actores_model.php");

class Actores {

    public static function index() {
        $per = new actores_model();
        $datos = $per->get_actores();
        //Llamada a la vista
        require_once("views/actores_view.php");
    }

}
