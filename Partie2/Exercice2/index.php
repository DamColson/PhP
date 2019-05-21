<!--<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        $isEasy = rand(0,1);
        if($isEasy==0){
            echo 'C\'est difficile !';
        }else{
            echo 'C\'est facile !';
        }
        ?>
    </body>
</html>-->
<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        $isEasy = rand(0,1) == 1;
        echo ($isEasy)? 'C\'est facile !':'C\'est difficile !';
        ?>
    </body>
</html>