<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp2</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        $age = rand(0,99);
        $genders = array('homme','femme');
        $key = array_rand($genders);
        $gender = $genders[$key];
        if($age<18 && $gender == 'homme'){
            echo 'vous êtes un '.$gender. ' de '.$age.' ans ,vous êtes donc un '.$gender.' mineur';
        }elseif($age>=18 && $gender == 'homme'){
            echo 'vous êtes un '.$gender. ' de '.$age.' ans ,vous êtes donc un '.$gender.' majeur';
        }elseif($age<18 && $gender == 'femme'){
            echo 'vous êtes une '.$gender. ' de '.$age.' ans ,vous êtes donc une '.$gender.' mineure';
        }else{
            echo 'vous êtes une '.$gender. ' de '.$age.' ans ,vous êtes donc une '.$gender.' majeure';
        }
        ?>
    </body>
</html>