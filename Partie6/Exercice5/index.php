<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $week = $_GET;
        if(isset($week['week'])):
            foreach($week as $key=>$value):
            ?>
        <p><?= $key.' : '.$value ?></p>
        <?php
            endforeach;
        else:
            echo 'Un ou plusieurs des paramètres recherchés sont inexistants';
        endif;
?>
    </body>
</html>