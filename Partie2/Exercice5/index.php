<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        $genders = array('homme','femme');
        $key = array_rand($genders);
        $gender = $genders[$key];
        echo ($gender != 'homme') ? 'C\'est une développeuse !!!<br />' : 'C\'est un développeur !!!<br />';
        if($gender != 'homme'){
            echo 'C\'est une développeuse !!!';
        }else{
            echo 'C\'est un développeur !!!';
        }
        ?>
    </body>
</html>