<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body><?php
        $form = $_POST;
        
        if(isset($form['lastName']) && isset($form['firstName']) && isset($form['gender'])):
 
            if(isset($_FILES['myFile']) && $_FILES['myFile']['error'] == 0) :  //Si le fichier a bien été envoyé et qu'il n'y a pas d'erreur alors :
                if ($_FILES['myFile']['size'] <= 2000000): // Si la taille du fichier est inférieure ou égale à 2 000 000 d'octet alors : 
                    $fileInfos = new SplFileInfo($_FILES['myFile']['name']);
                    $extension = pathinfo($fileInfos->getFilename(), PATHINFO_EXTENSION);
                    $name = pathinfo($fileInfos->getFilename(), PATHINFO_FILENAME);
                    $validExtensions = ['pdf'];
                    if (in_array($extension, $validExtensions)): // si l'extension du fichier apparait dans le tableau des extensions autorisées alors : 
                        move_uploaded_file($form['myFile']['tmp_name'], 'uploads/' . basename($form['myFile']['name'])); // transfert du fichier depuis le stockage temporaire ou il se trouvait vers un stockage permanent
                        foreach($form as $key=>$value):
             ?>
                        <p><?= $key.' : '.$value ?></p>
                        
            <?php
                        endforeach;
                        ?>
                        <p><?= 'filename : '.$name ?></p>
                        <?php
                        echo 'extension : '.$extension;
                        
                else:
                    echo 'Ceci n\'est pas un pdf.';
                
                endif;
            else:
                echo 'Erreur à l\'étape de vérification de la taille.';
            endif;
        else:
            echo 'Erreur à l\'étape de vérification des erreurs et/ou de l\'envoi.';
        endif;
        else: ?>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <label for="gender">Civilité : </label><select name="gender" id="gender">
              <option autofocus disabled>Selectionnez votre genre :</option>
              <option>Monsieur</option>
              <option>Madame</option>
              <option>Monsame</option>
              <option>Madieur</option>
          </select>  
            <label for="lastName">Nom : </label><input type="text" name="lastName" id="lastName" required/>
            <label for="firstName">Prénom : </label><input type="text" name="firstName" id="firstName" required/>
            <input type="file" name="myFile" id="myFile"/>
            <button type="submit">envoyer</button>               
        </form>
        <?php
        endif;
?>
    </body>
</html>

    