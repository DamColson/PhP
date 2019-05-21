<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        $lowVar = 0;
        $highVar = rand(1,100);
        echo $highVar.'<br />';
        while($lowVar<=20){
            echo 'lowVar = '.$lowVar.'<br />';
            echo 'multiplication : '.$lowVar * $highVar.'<br />';   
            $lowVar++;
        }
        ?>
    </body>
</html>
