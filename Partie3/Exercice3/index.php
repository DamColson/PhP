<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        $highVar = 100;
        $lowVar = rand(1,100);
        echo $lowVar.'<br />';
        while($highVar>10){
            echo 'highVar = '.$highVar.'<br />';
            echo 'multiplication : '.$lowVar * $highVar.'<br />';   
            $highVar--;
        }
        ?>
    </body>
</html>