<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Les boucles en PHP</title>
</head>
<body>
    <?php
    $x=1; //var vaut 1
    //tant que la variable est inférieure à 10, on
    //affiche un texte
    /*while ($x<=10){
        echo 'nombre :' .$x.';.<br/>';
        $x++;
    }*/
    //avec la boucle WHILE DO
    do{
        echo'nombre:'.$x.'<br/>';
        $x++;
    }
    while
    ($x<=10);
    ?>
<!--avec la boucle FOR pour quand on sait combien de fois
on doit exécuter le même code !-->
    <?php
    for ($x=1;$x<=10;$x++){
        echo 'nombre :'.$x.'<br/>';
    }
    for ($x=10;$x>=1;$x--){
        echo 'nombre :'.$x.'<br/>';
    }
    ?>

</body>
</html>