<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $month = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre'];
        echo $month[7];
        $month[7] = 'Août';
        ?>
        <p><?= $month[7];?></p>
        
    </body>
</html>