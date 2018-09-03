<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actores de Sakila</title>
    </head>
    <body>
        <?php
        foreach ($datos as $dato) {
            echo $dato["first_name"] . "<br/>";
        }
        ?>
    </body>
</html>
