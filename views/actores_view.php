<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actores de Sakila</title>
    </head>
    <body>
        <?php
        foreach ($datos as $dato) {
            //echo $dato["first_name"] . " " . $dato["last_name"] . " <a href='index.php?controller=actores&action=view&id="
            //. $dato["actor_id"] . "'>Detalle</a> " . "<br/>";
            echo $dato["first_name"] . " " . $dato["last_name"] . " ";
            ?>
            <a href="index.php?controller=actores&action=view&id=<?= $dato["actor_id"] ?>">Detalle</a> <br/>
            <?php
        }
        ?>
    </body>
</html>
