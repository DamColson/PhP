<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        (string)$name;
        function name($name){
            echo $name;
        }
        name("Bertrand");
        ?>
        <p>
            <?php
        name("Jean");
        ?>
        </p>
    </body>
</html>