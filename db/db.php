<?php

class Conectar {

    public static function conexion() {
        $server = "localhost";
        $user = "root";
        $password = "";
        $db = "sakilla";

        try {
            $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (Exception $e) {
            echo "Failed: " . $e->getMessage();
        }
    }

}
