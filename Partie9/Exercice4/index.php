<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        setlocale (LC_TIME, 'fr_FR.utf8','fra');
        echo 'Le timestamp de la date d\'aujourd\'hui, à savoir le '.(strftime("%A %d %B %Y")).' est égal à : '.time();
        ?>
        <p>
            <?='Le timestamp du '.strftime('%A %d %B %Y',mktime(0, 0, 0, 8, 2, 2016)).' est égal à : '.mktime(0, 0, 0, 8, 2, 2016);?></p>
        
    </body>
</html>