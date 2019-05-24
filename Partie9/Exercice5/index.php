<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $timestampDiff = time()-mktime(0, 0, 0, 5, 16, 2016);
        setlocale (LC_TIME, 'fr_FR.utf8','fra');
        echo 'Il y a '.intval($timestampDiff/(3600*24)).' jours qui nous séparent du 16 Mai 2016.';
        ?>
               
    </body>
</html>