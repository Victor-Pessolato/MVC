<?php

class films_model {

    private $db;
    private $filmes;

    public function __construct() {
        $this->db = Conectar::conexion();
        $this->filmes = array();
    }

    public function get_filmes() {
        $consulta = $this->db->query("select * from film");
        $this->filmes = $consulta->fetchAll();
        return $this->filmes;
    }

    public function get_film($ID) {
        $consulta = $this->db->query("select * from film where film_id = $ID");
        $this->filmes = $consulta->fetch();
        return $this->filmes;
    }

}
