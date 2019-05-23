<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body> <?php 


foreach($_SESSION as $key => $value):
    ?>
        <p><?= $key.' : '.$value ?></p>
        <?php
endforeach;
?>
        <a href="<?='index.php?'.SID?>">lien</a>
       
    </body>
</html>