<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $genderArray = [homme,femme];
        $genderIndex = rand(0,count($genderArray)-1);
        $gender = $genderArray[$genderIndex];
        $age = rand(0,99);
        function id($gender,$age){
            if($gender == 'homme' && $age<18){
                echo 'Tu es un jeune homme mineur de '.$age.' ans.';
            }elseif($gender == 'homme' && $age>=18){
                echo 'Tu es un homme adulte de '.$age.' ans.';
            }elseif($gender == 'femme' && $age<18){
                echo 'Tu es une jeune demoiselle de '.$age.' ans.';
            }else{
                echo 'Tu es une femme adulte de '.$age.' ans.';
            }
        }
        id($gender,$age);
        ?>
        
    </body>
</html>