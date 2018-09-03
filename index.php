<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once("db/db.php");
        require_once("models/actores_model.php");

        $a = new actores_model();
        print_r($a->get_actores());
        ?>
    </body>
</html>
