<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Les fonctions PHP</title>
</head>
<body>
<?php
//on déclare que l'on crée une fonction, ensuite on donne un nom
//à cette fonction, les () permettent de mettre des arguments
//et après le code entre {}
//function Nomfonction(){
 //   code exécuté par la fonction;
//}
function Bonjour (){
    echo "bonjour à tous";
}
Bonjour();

function Bonjourutilisateur($prenom){
    echo ' bonjour '.$prenom.'!';
}
Bonjourutilisateur('Pierre');
//on écrit là une fonction avec 2 arguments :
function NomAge($prenom,$age){
    echo $prenom.' a '.$age.' ans';
}
NomAge('Pierre',24);
?>
<?php
function DireBonjour(){
    return "Bonjour";//return termine la fonction, un echo derrière
    //ne serait pas affiché!
}
function DireBonsoir(){
    echo "Bonsoir";
}
$bonjour=DireBonjour();//cette fonction retourne la valeur "bonjour"
//qui est stockée dans la variable $bonjour
$bonsoir=DireBonsoir();//là la fonction ne retourne aucune valeur,
//elle fait juste un echo
echo $bonjour;
echo $bonsoir;
?>

</body>
</html>