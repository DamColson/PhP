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
    $error = ['firstName'=>1,'lastName'=>1,'age'=>1];
    $validate = ['firstName'=>0,'lastName'=>0,'age'=>0];
        $form = $_POST;
        $form = array_map('strip_tags',$form);
        print_r($form);
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
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Prénom" value="<?= ((isset($_POST['firstName']) && preg_match($regexFirstName,$_POST['firstName'])))?$_POST['firstName']:''; ?>" style="<?= ((isset($_POST['firstName']) && !preg_match($regexFirstName,$_POST['firstName'])))?'border : red solid 2px':''; ?>" required />
                </div>
                <div class="form-group col-md-4">
                    <label for="lastName">Nom : </label>
                    <input type="text" class="form-control "id="lastName" name="lastName" placeholder="Nom" value="<?= (isset($_POST['lastName']) && preg_match($regexLastName,$_POST['lastName']))?$_POST['lastName']:'';?>" style="<?= ((isset($_POST['lastName']) && !preg_match($regexLastName,$_POST['lastName'])))?'border : red solid 2px':''; ?>" required />
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label for="age">Age : </label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Age de 16 à 123" value="<?= ((isset($_POST['age']) && preg_match($regexAge,$_POST['age'])))?$_POST['age']:''; ?>" style="<?= ((isset($_POST['age']) && !preg_match($regexAge,$_POST['age'])))?'border : red solid 2px':''; ?>" required />
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
            if(preg_match($regexLastName,$form['lastName'])): 
                $error['lastName'] = 0;
            else:
                echo 'Nom invalide ';
            endif;
            if(preg_match($regexAge,$form['age'])):
                $error['age'] = 0;
            else:
                echo 'Age invalide';
            endif;
            if($error == $validate):
                foreach($form as $key=>$value):
                  ?><p><?= ($key).' : '.($value);?></p>
                 <?php
                endforeach;   
            endif;
        else:
            echo 'Veuillez remplir le formulaire en entier';
        endif;
               

?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
</html>