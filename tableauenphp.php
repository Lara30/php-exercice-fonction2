<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Les tableaux en PHP</title>
</head>
<body>
<p>il existe 3 types de tableaux en php : les tableaux numérotés
ou indexé ; les tableaux associatifs et les tableaux multi
dimensionnels</p>
<?php
//un tableau numéroté =la clef est numérique (la 1 ère valeur
//est la clef 0
//on crée notre 1ère variable tableau
$prenoms=array ('Pierre', 'Paul','Jacques');
//là on le fait de manière indexée :
//$prenoms[0]='Pierrre';
//$prenoms[1]='Paul';
//$prenoms[2]='Jacques';
//le résultat sera strictement le même!

//<p>les tableaux associatifs ont des clefs textuelles qui ont
//des réelles informations
//le "=>" permette d'associer notre clef à une valeur </p>!-->

$age=array (
    'Pierre'=>24,
    'Paul'=>22,
    'Jacques'=>'inconnu');
//$age['Pierre']=24;
//$age['Paul']=22;
//$age['Jacques']="inconnu";
//pour lire et afficher les valeurs d'un tableau on va
//utiliser certaines fonctions :
//si on ne veut utiliser qu'une seule valeur :
echo $prenoms[0].'<br/>';
echo $age['Pierre'].'<br/>';

//si on veut parcourir tout un tableau et afficher
// toutes ses valeurs, on revient sur les boucles:
for ($x=0;$x<=3;$x++){
    echo $prenoms [$x].'<br/>';
}

//avec la boucle foreach qui lit un tableau ligne par ligne
//et stocker la variable temporairement
//c'est celle là que l'on utilise pour parcourir un tableau
// associatif
foreach($prenoms as $items) {
    echo $items.'<br/>';
}
foreach ($age as $valeurs) {
    echo $valeurs.'<br/>';
}
//là on veut récupérer la clef :
foreach ($age as $clef =>$valeurs) {
    echo 'l\'age de '.$clef.' est ' .$valeurs.'.<br/>';
}
//pour afficher le tableau avec les retours à la ligne :
echo '<pre>';
print_r($age);//pour afficher le tableau
echo'</pre>';

//les tableaux multidimensionnels contiennent eux-mêmes
//un ou plusieurs tableaux
?>
<h2>TABLEAU MULTIDIMENSIONNEL</h2>
<?php
$membres=array(
    array('Pierre',24,'pierre.giraud@edhec.com'),
    array ('Paul',22,'paul.essai@hotmail.com'),
    array('Jacques',35,'jacques@gmail.com')
);
//comme c'est un tableau en 2 dimensions, il nous faut
//deux indices = lignes et colonnes.
echo $membres[0][0].' a '.$membres[0][1].' ans. son mail est : '.$membres[0][2].'<br/>';
//comme c'est le premier tableau la première valeur sera 0,
// juste l'index change
echo $membres[1][0].' a '.$membres[1][1].' ans. son mail est : '.$membres[1][2].'<br/>';
//ici on travaille sur la variable ligne
for ($ligne=0; $ligne<3; $ligne++){
    $membre_num=$ligne+1;
    echo 'membre numéro '.$membre_num.'<br/>';
    echo '<ul>';
    //on travaille ici sur la variable colonne
    for($col=0;$col<3;$col++){
        echo '<li>' .$membres[$ligne][$col].'</li>';
    }
    echo '</ul>';
}
?>
</body>
</html>