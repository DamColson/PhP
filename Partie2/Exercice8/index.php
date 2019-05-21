<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        $isOk = rand(0,1);
        echo ($isOk) ? 'C\'est ok !!<br />' : 'C\'est pas bon !!!<br />';
        if($isOk == 1){
            echo 'C\'est ok !!'; 
        }else{
            echo 'C\'est pas bon !!!';
        }
        ?>
    </body>
</html>