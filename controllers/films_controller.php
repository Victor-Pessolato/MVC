<?php

//Llamada al modelo
require_once("db/db.php");
require_once("models/films_model.php");

class Films {

    public static function index() {
        $per = new films_model();
        $datos = $per->get_filmes();
        //Llamada a la vista
        require_once("views/films_view.php");
    }

    public static function view($id) {
        $per = new films_model();
        $dato = $per->get_film($id);
        //Llamada a la vista
        require_once("views/film_view.php");
    }

}
