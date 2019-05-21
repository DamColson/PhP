<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        $age = rand(0,99);
        echo ($age >= 18) ? 'Tu es majeur<br />' : 'Tu n\'es pas majeur<br />';
        if($age>=18){
            echo 'Tu es majeur';
        }else{
            echo 'Tu n\'es pas majeur';
        }
        ?>
    </body>
</html>