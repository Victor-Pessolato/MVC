<?php

class actores_model {

    private $db;
    private $actores;

    public function __construct() {
        $this->db = Conectar::conexion();
        $this->actores = array();
    }

    public function get_actores() {
        $consulta = $this->db->query("select * from actor");
        $this->actores = $consulta->fetchAll();
        return $this->actores;
    }

    public function get_actor($ID) {
        $consulta = $this->db->query("select * from actor where actor_id = $ID");
        $this->actores = $consulta->fetch();
        return $this->actores;
    }

}
