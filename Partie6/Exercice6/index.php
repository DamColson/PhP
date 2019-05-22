<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $campus = $_GET;
        if(isset($campus['building']) && isset($campus['room'])):
            foreach($campus as $key=>$value):
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