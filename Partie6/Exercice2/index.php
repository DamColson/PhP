<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $id = $_GET;
        if(isset($id['age'])):
            echo $id['age'];
        else:
            echo 'Il n\'existe aucun paramètre correspondant à l\'âge';
        endif;
?>
    </body>
</html>