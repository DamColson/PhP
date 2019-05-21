<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        $isOk = rand(0,1);
        echo ($isOk == false) ? 'C\'est pas bon !!!<br />' : 'C\'est ok !!<br />';
        if($isOk == 0){
            echo 'C\'est pas bon !!!';
        }else{
            echo 'C\'est ok !!';
        }
        ?>
    </body>
</html>