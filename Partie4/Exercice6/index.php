<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $firstname;
        $lastname;
        $age;
        function introduction($firstname,$lastname,$age){
            echo 'Bonjour '.$firstname.' '.$lastname.', tu as '.$age.' ans.';
        }
        introduction("Paul","Compère",28);
        introduction("Damien","Colson",32);
        ?>
    </body>
</html>