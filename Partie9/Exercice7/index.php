<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        setlocale (LC_TIME, 'fr_FR.utf8','fra');
        echo strftime('%A %d %B %Y',time()+(20*24*3600));
        ?>
               
    </body>
</html>