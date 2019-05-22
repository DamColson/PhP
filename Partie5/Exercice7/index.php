<!DOCTYPE html>
<html>
    <head>
        <title>ExercicePhp1</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $department = ['76'=>'Seine-Maritime','27'=>'Eure','50'=>'Manche','61'=>'Orne','14'=>'Calvados'];
        $department['51'] = 'Marne';
        foreach($department as $departmentNumber=>$departmentName){
            ?>
        <p><?= $departmentNumber.'. '.$departmentName ?></p>
        <?php
        }
        ?>
    </body>
</html>