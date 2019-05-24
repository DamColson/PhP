<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        for($i = 1;$i<9;$i++){
            ?>
        <p><a href=<?='Exercice'.$i.'/index.php'?>><?= 'Exercice '.$i?></a></p>
        <?php
        }
        ?>
        <a href="Tp/index.php">Tp</a>
    </body>
</html>
