<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        $age = rand(0,99);
        if($age<18){
            echo 'vous avez '.$age.' ans ,vous êtes mineur';
        }else{
            echo 'vous avez '.$age.' ans ,vous êtes majeur';
        }
        ?>
    </body>
</html>