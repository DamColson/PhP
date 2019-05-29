
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
        include '../../regex.php';
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
            if(preg_match_all($regexBirthday,$form['birthday'])):
                $error['birthday'] = 0;
                else:
                echo 'date de naissance invalide ';
            endif;
            if(preg_match($regexAddress,$form['address'])):
                $error['address'] = 0;
                else:
                echo 'Adresse invalide ';
            endif;
            if(preg_match($regexPostal,$form['zip'])):
                $error['zip'] = 0;
                else:
                echo 'Code postal invalide ';
            endif;
            if(preg_match($regexCity,$form['city'])):
                $error['city'] = 0;
                else:
                echo 'Ville invalide ';
            endif;
            if(preg_match($regexMail,$form['mail'])):
                $error['mail'] = 0;
                else:
                echo 'Mail invalide ';
            endif;
            if(preg_match($regexPhone,$form['phone'])):
                $error['phone'] = 0;
                else:
                echo 'Numéro de téléphone invalide ';
            endif;
            if(preg_match($regexPeNumber,$form['peNumber'])):
                $error['peNumber'] = 0;
                else:
                echo 'Numéro pole emploi invalide ';
            endif;
            if(preg_match($regexCodecademy,$form['codecademy'])):
                $error['codecademy'] = 0;
                else:
                echo 'Lien codecademy invalide ';
            endif;
            if($error == $validate):
                foreach($form as $key=>$value):
                  ?><p><?=strip_tags($key).' : '.strip_tags($value);?></p>
                 <?php
                endforeach;       
            endif;
        else: ;?>
        <form method="POST" class="bg-dark" action="index.php">
            <p class="h3 text-light mb-3 text-center">Formulaire de candidature à la MANU</p>
            <fieldset class="bg-dark text-light mb-3">
            <div class="row bg-light text-dark rounded w-75 mx-auto text-center align-items-center justify-content-center no-gutters">
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="nationality">Votre nationalité : </label>
                    <select id="nationality" name ="nationality" class="form-control" required>
                        <option selected disabled>Choisissez votre nationalité</option>
                        <option>Normande</option>
                        <option>Française</option>
                        <option>Autre</option>
                    </select>
                </div>
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label for="firstName">Prénom : </label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Prénom" required />
                </div>
                <div class="form-group col-md-4">
                    <label for="lastName">Nom : </label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nom" required />
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label for="birthday">Date de naissance : </label>
                    <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Date de naissance" required />
                </div>
                <div class="form-group col-md-4">
                    <label for="birthPlace">Pays de naissance : </label>
                    <select type="text" class="form-control" id="birthPlace" name="birthPlace" placeholder="Lieu de naissance" required>
                        <option selected disabled>Choisissez votre Pays de naissance : </option>
                        <option>Normandie</option>
                        <option>France</option>
                        <option>Autre</option>
                    </select>
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            </fieldset>
            <fieldset class="bg-dark text-light mb-3">
            <div class="row bg-light text-dark rounded w-75 mx-auto text-center align-items-center justify-content-center no-gutters">
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1 rue du perroquet qui tousse" required />
            </div>
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label for="zip">Code Postal</label>
                    <input type="text" class="form-control" id="zip" name="zip" placeholder="12345" required />
                </div>
                    <div class="form-group col-md-4">
                    <label for="city">Ville</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="parrotown" required />
                </div>
            <div class="form-group col-md-2"></div>
            </div>
            </fieldset>
            <fieldset class="bg-dark text-light mb-3">
            <div class="row bg-light text-dark rounded w-75 mx-auto text-center align-items-center justify-content-center no-gutters">
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="mail">Email : </label>
                    <input type="text" class="form-control" id="mail" name="mail" placeholder="Votre Email" required />
                </div>
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="phone">Téléphone : </label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="0XXXXXXXXX" required />
                </div>
                <div class="form-group col-md-4"></div>
            </div>
            </fieldset>
            <fieldset class="bg-dark text-light  mb-3">                
            <div class="row bg-light text-dark rounded w-75 mx-auto text-center align-items-center justify-content-center no-gutters">
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="diploma">Vos diplômes : </label>
                    <select id="diploma" name ="diploma" class="form-control" required>
                        <option selected disabled>Quel diplôme avez-vous?</option>
                        <option>Aucun diplôme</option>
                        <option>Bac</option>
                        <option>Bac +2</option>
                        <option>Bac +3</option>
                        <option>Supérieur à Bac +3</option>
                        <option>Autre</option>
                    </select>
                </div>
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="peNumber">Numéro pôle emploi : </label>
                    <input type="text" class="form-control" id="peNumber" name="peNumber" placeholder="Votre numéro pôle emploi" required />
                </div>
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4">
                    <label for="badges">Votre nombre de badges : </label>
                    <select id="badges" name ="badges" class="form-control" required>
                        <option selected disabled>Combien de badges avez-vous?</option>
                        <option>0 badge</option>
                        <option>1 badge</option>
                        <option>2 badges</option>
                        <option>3 badges</option>
                        <option>4 badges</option>
                        <option>5 badges</option>
                        <option>6 badges</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="codecademy">lien codecademy : </label>
                    <input type="text" class="form-control" id="codecademy" name="codecademy" required />
                </div>
                <div class="form-group col-md-2"></div>
            </div>
            </fieldset>
            <fieldset class="bg-dark mb-3">
            <div class="row bg-light text-dark rounded w-75 mx-auto text-center align-items-center justify-content-center no-gutters">
                <div class="form-group col-md-10">
                    <label for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? : </label>
                    <textarea class="form-control" id="hero" name="hero" required></textarea>
                </div>
                <div class="form-group col-md-10">
                    <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </label>
                    <textarea class="form-control" id="hacks" name="hacks" required></textarea>
                </div>
                <div class="form-group col-md-10">
                    <label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? : </label>
                    <textarea class="form-control" id="experience" name="experience" required></textarea>
                </div>
            </div>
            </fieldset>
            <div class="align-items-center justify-content-center d-flex">
                <button type="submit" class="btn btn-light text-dark mb-3">Envoyer</button>
            </div>
        </form>
        
        <?php
                endif;
               

?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
</html>