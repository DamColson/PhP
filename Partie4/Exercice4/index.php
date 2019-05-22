<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        (int)$firstnumber;
        (int)$secondnumber;
        function compare($firstnumber,$secondnumber){
            if($firstnumber>$secondnumber){
                echo 'Le premier nombre est plus grand';
            }elseif($firstnumber<$secondnumber){
                echo 'Le premier nombre est plus petit';
            }else{
                echo 'Les deux nombres sont identiques';
            }
        }
        compare(10,5);
        ?>
        <p><?php
        compare(5,10);
        ?>
        </p>
        <?php
        compare(10,10);
        ?>
    </body>
</html>