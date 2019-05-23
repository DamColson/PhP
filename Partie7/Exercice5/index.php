<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form action="index.php" method="POST">
            <label for="gender">Civilité : </label><select name="gender" id="gender">
              <option autofocus disabled>Selectionnez votre genre :</option>
              <option>Monsieur</option>
              <option>Madame</option>
              <option>Monsame</option>
              <option>Madieur</option>
          </select>  
            <label for="lastName">Nom : </label><input type="text" name="lastName" id="lastName" />
            <label for="firstName">Prénom : </label><input type="text" name="firstName" id="firstName" />
            <button type="submit">envoyer</button>               
        </form>
                <?php
        $form = $_POST;
        if(isset($form['lastName']) && isset($form['firstName']) && isset($form['gender'])):
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
