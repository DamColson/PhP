<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        (string)$firstname;
        (string)$lastname;
        function concat($firstname,$lastname){
            echo $firstname.' '.$lastname;
        }
        concat("Paul","Compère");
        ?>
    </body>
</html>