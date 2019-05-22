<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $month = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre'];
        for($i = 0;$i<count($month);$i++){
            ?>
        <p><?= $month[$i] ?></p>
        <?php
        }
        ?>
    </body>
</html>