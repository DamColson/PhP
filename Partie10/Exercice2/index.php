<?php
foreach($_POST as $key=>$value):
    setcookie($key,$value, time() + 365*24*3600, '/', 'part10',false,true);
endforeach; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body><?php
    $error = ['firstName'=>1,'lastName'=>1,'birthday'=>1,'address'=>1,'zip'=>1,'city'=>1,'mail'=>1,'phone'=>1,'peNumber'=>1,'codecademy'=>1];
    $validate = ['firstName'=>0,'lastName'=>0,'birthday'=>0,'address'=>0,'zip'=>0,'city'=>0,'mail'=>0,'phone'=>0,'peNumber'=>0,'codecademy'=>0];
        $form = $_POST;
        array_map('strip_tags',$_POST);
        include '../../regex.php';
        ?>
        <form method="POST" class="bg-dark" action="index.php">
            <p class="h3 text-light mb-3 text-center">Formulaire</p>
            <fieldset class="bg-dark text-light mb-3">
            <div class="row bg-light text-dark rounded w-75 mx-auto text-center align-items-center justify-content-center no-gutters">
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="gender">Votre civilité : </label>
                    <select id="gender" name ="gender" class="form-control" required>
                        <option disabled <?= (empty($_POST['gender']))?'selected':'' ?>>Choisissez votre civilité</option>
                        <option value = "Monsieur" <?= ($_POST['gender'] == 'Monsieur')?'selected': ''?>>Monsieur</option>
                        <option value = "Madame" <?= ($_POST['gender'] == 'Madame')? 'selected': ''?>>Madame</option>
                        <option value = "Autre" <?= ($_POST['gender'] == 'Autre')? 'selected': ''?>>Autre</option>
                    </select>
                </div>
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label for="firstName">Prénom : </label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Prénom" value="<?=$_POST['firstName']?>" required />
                </div>
                <div class="form-group col-md-4">
                    <label for="lastName">Nom : </label>
                    <input type="text" class="form-control "id="lastName" name="lastName" placeholder="Nom" value="<?php if(isset($_POST['lastName']) && preg_match($regexLastName,$_POST['lastName'])):echo $_POST['lastName'];else:echo'';endif; ?>"  required />
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label for="age">Age : </label>
                    <input type="text" class="form-control" id="age" name="age" value="<?=$_POST['age']?>" required />
                </div>
                <div class="form-group col-md-4">
                    <label for="Society">Société : </label>
                    <input type="text" class="form-control" id="society" name="society" value="<?=$_POST['society']?>" required />
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            </fieldset>
            <div class="align-items-center justify-content-center d-flex">
                <button type="submit" class="btn btn-light text-dark mb-3">Envoyer</button>
            </div>
        </form>
        
        <?php
                if(count($form)>0):           
            if(preg_match($regexFirstName,$form['firstName'])):
                $error['firstName'] = 0;
                else:
                echo 'Prénom invalide '; 
            endif;
//            if(preg_match($regexLastName,$form['lastName'])): 
//                $error['lastName'] = 0;
//                else:
//                echo 'Nom invalide ';
//            endif;
//            if(preg_match_all($regexBirthday,$form['birthday'])):
//                $error['birthday'] = 0;
//                else:
//                echo 'date de naissance invalide ';
//            endif;
//            if(preg_match($regexAddress,$form['address'])):
//                $error['address'] = 0;
//                else:
//                echo 'Adresse invalide ';
//            endif;
//            if(preg_match($regexPostal,$form['zip'])):
//                $error['zip'] = 0;
//                else:
//                echo 'Code postal invalide ';
//            endif;
//            if(preg_match($regexCity,$form['city'])):
//                $error['city'] = 0;
//                else:
//                echo 'Ville invalide ';
//            endif;
//            if(preg_match($regexMail,$form['mail'])):
//                $error['mail'] = 0;
//                else:
//                echo 'Mail invalide ';
//            endif;
//            if(preg_match($regexPhone,$form['phone'])):
//                $error['phone'] = 0;
//                else:
//                echo 'Numéro de téléphone invalide ';
//            endif;
//            if(preg_match($regexPeNumber,$form['peNumber'])):
//                $error['peNumber'] = 0;
//                else:
//                echo 'Numéro pole emploi invalide ';
//            endif;
//            if(preg_match($regexCodecademy,$form['codecademy'])):
//                $error['codecademy'] = 0;
//                else:
//                echo 'Lien codecademy invalide ';
//            endif;
//            if($error == $validate):
                foreach($form as $key=>$value):
                  ?><p><?=strip_tags($key).' : '.strip_tags($value);?></p>
                 <?php
                endforeach;   
//            endif;
        else:
            echo 'Veuillez remplir le formulaire en entier';
        endif;
               

?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
</html>