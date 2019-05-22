<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $id = $_GET;
        foreach($id as $key=>$value) :
            ?>
        <p><?= $key.' : '.$value;?></p>
        <?php
        endforeach;
?>
    </body>
</html>