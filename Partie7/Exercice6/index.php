<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body><?php
        $form = $_POST;
        if(isset($form['lastName']) && isset($form['firstName']) && isset($form['gender'])):
            session_start();
            foreach($form as $key=>$value):
            ?>
        <p><?= $key.' : '.$value ?></p>
        <?php
            endforeach;
        else: ?>
        <form action="index.php" method="POST">
            <label for="gender">Civilité : </label><select name="gender" id="gender">
              <option autofocus disabled>Selectionnez votre genre :</option>
              <option>Monsieur</option>
              <option>Madame</option>
              <option>Monsame</option>
              <option>Madieur</option>
          </select>  
            <label for="lastName">Nom : </label><input type="text" name="lastName" id="lastName" required/>
            <label for="firstName">Prénom : </label><input type="text" name="firstName" id="firstName" required/>
            <button type="submit">envoyer</button>               
        </form>
        <?php
                endif;
?>
    </body>
</html>
