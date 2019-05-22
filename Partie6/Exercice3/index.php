<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $date = $_GET;
        if(isset($date['startDate']) && isset($date['endDate'])):
            foreach($date as $key=>$value):
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