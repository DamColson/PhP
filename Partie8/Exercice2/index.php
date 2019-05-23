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
    
$_SESSION['lastName'] = 'Colson';
$_SESSION['firstName']   = 'Damien';
$_SESSION['age'] = 32;

?>
        <a href="<?= 'test.php?'.SID?>">lien</a>     
    </body>
</html>

    