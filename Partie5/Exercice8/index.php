<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $month = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre'];
        $month[7] = 'Août';
        foreach($month as $monthNames){
            ?>
        <p><?= $monthNames ?></p>
        <?php
        }
        ?>
    </body>
</html>