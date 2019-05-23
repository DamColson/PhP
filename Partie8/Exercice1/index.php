<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body> <?php
//-- Fonction de récupération de l'adresse IP du visiteur
function getMyIp()
{
    if ( isset ( $_SERVER['HTTP_X_FORWARDED_FOR'] ) )
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    elseif ( isset ( $_SERVER['HTTP_CLIENT_IP'] ) )
    {
        $ip  = $_SERVER['HTTP_CLIENT_IP'];
    }
    else
    {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
echo 'Votre adresse IP est : '.getMyIp();
?>
        <p><?= $_SERVER['SERVER_NAME'];?></p>
 <?php
 echo $_SERVER['HTTP_USER_AGENT'];
         ?>
        
    </body>
</html>

    