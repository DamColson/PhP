<?php
foreach($_POST as $key=>$value):
setcookie($key,$value, time() + 365*24*3600,null, null, false, true);
endforeach;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body><?php
        $form = $_POST;
        
        if(isset($form['login']) && isset($form['password'])):
            print_r($_COOKIE);
            
        else: ?>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <label for="gender">Civilité : </label><select name="gender" id="gender">
              <option autofocus disabled>Selectionnez votre genre :</option>
              <option>Monsieur</option>
              <option>Madame</option>
              <option>Monsame</option>
              <option>Madieur</option>
          </select>  
            <label for="login">Login : </label><input type="text" name="login" required/>
            <label for="password">Password : </label><input type="password" name="password" required/>
            <button type="submit">envoyer</button>               
        </form>
        <?php
        endif;
?>
        <a href = "test.php">lien</a>
    </body>
</html>

    