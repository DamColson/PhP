<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php

        setlocale (LC_TIME, 'fr_FR.utf8','fra');
        echo (strftime("%A %d %B %Y")).' ';
        echo date('l d F Y');
        ?>
    </body>
</html>