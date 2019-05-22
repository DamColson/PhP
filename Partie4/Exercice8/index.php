<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $firstnumber = rand(0,99);
        $secondnumber = rand(0,99);
        $thirdnumber = rand(0,99);
        function add($firstnumber,$secondnumber,$thirdnumber){
            
            echo 'Les trois nombres générés sont '.$firstnumber.', '.$secondnumber.' et '.$thirdnumber.'.'?>
        <p>Leur somme est égale à : <?=($firstnumber + $secondnumber + $thirdnumber);?></p>
        <?php
        }
        add($firstnumber,$secondnumber,$thirdnumber);
        ?>
    </body>
</html>
<VirtualHost *:80>
      ServerName www.part5
      ServerAlias part5
      DocumentRoot /home/mynewuser/phpExercice/Partie5
      <Directory /home/mynewuser/phpExercice/Partie5/>
        AllowOverride All
        Require all granted
      </Directory>
      ErrorLog /var/log/apache2/part5-error.log
      LogLevel warn
      CustomLog  /var/log/apache2/part5-access.log combined
      ServerSignature Off
    </VirtualHost>