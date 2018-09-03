<?php

class actores_model {

    private $db;
    private $actores;

    public function __construct() {
        $this->db = Conectar::conexion();
        $this->actores = array();
    }

    public function get_actores() {
        $consulta = $this->db->query("select * from actors");
        while ($filas = $consulta->fetchAll()) {
            $this->actores[] = $filas;
        }
        return $this->actores;
    }

}
