<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $form = $_POST;
        if(isset($form['lastName']) && isset($form['firstName'])):
            foreach($form as $key=>$value):
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