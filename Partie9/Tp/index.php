
              
<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form name="CalendarForm" method="POST" action="index.php">
            <label for="year">Année : </label><select name="year" id="year">
              <option autofocus disabled>Selectionnez Une année :</option>
              <?php
              setlocale (LC_TIME, 'fr_FR.utf8','fra');
              $inTenYear = time()+(10*3600*24*365);
              for($year=1970;$year<=strftime('%Y',$inTenYear);$year++):
                  ?><option><?= $year ?></option>
                  <?php
             endfor;
             ?>
            </select>
            <label for="month">Mois : </label><select name="month" id="month">
                <?php
                $month = ['1'=>'Janvier', '2'=>'Février', '3'=>'Mars', '4'=>'Avril', '5'=>'Mai', '6'=>'Juin', '7'=>'Juillet', '8'=>'Août', '9'=>'Septembre', '10'=>'Octobre', '11'=>'Novembre', '12'=>'Décembre'];
             foreach($month as $monthNumber=>$monthName):
                 ?><option value="<?=$monthNumber?>"><?= $monthName ?></option>
                 <?php
             endforeach;
              ?>
            </select>
            <button type="submit">envoyer</button>
        </form>
        <?php
        
        echo strftime('%B %Y', mktime(0,0,0,$_POST['month'],1,$_POST['year']));
        
                
        $day = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
                ?>
        <table border="1" cellspacing="2" cellpadding="0">
            <thead>
                <tr>
                    <?php
                    foreach($day as $dayName):
                        ?>
                    <th><?=$dayName?></th>
                    <?php
                    endforeach;
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                for($i=0;$i<7;$i++):
                    ?>
                <tr><?php
                for($j=1;$j<8;$j++):
                    ?>
                    <td><?php             
                    if($i == 1 && $j == strftime('%u', mktime(0,0,0,$_POST['month'],1,$_POST['year']))):
                        echo strftime('%e', mktime(0,0,0,$_POST['month'],$k+1,$_POST['year']));
                        $k++;
                    elseif($i == 1 && $j > strftime('%u', mktime(0,0,0,$_POST['month'],1,$_POST['year']))):
                        echo strftime('%e', mktime(0,0,0,$_POST['month'],$k+1,$_POST['year']));
                        $k++;
                    elseif($i>1):
                        if($k>=date('t',mktime(0,0,0,$_POST['month'],1,$_POST['year']))):
                            echo '';
                        else:
                            echo strftime('%e', mktime(0,0,0,$_POST['month'],$k+1,$_POST['year']));
                            $k++;
                        endif;                       
                    endif;                
                    ?></td>
                    <?php
                endfor;
                ?>
                    </tr>
                    <?php
                endfor;
                ?>                    
            </tbody>
        </table>
    </body>
</html>