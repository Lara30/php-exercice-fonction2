<?php
//CREATION D'UN TABLEAU ASSOCIATIF MULTIDIMENSIONNEL :

//je déclare là où va s'appliquer la fonction
batailleNavale('A', 1);
//la fonction va contenir des lettres (col) et des chiffres (lignes)
function batailleNavale($string, $int) {
    //je crée un tableau dans lequel je passe toutes les colonnes
    $plateforme = array(
        //dans ce tableau je déclare les colonnes avec leurs valeurs
        //1=zone blanche ; 2=zone grise;
        'a' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
        'b' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
        'c' => array(1, 1, 1, 1, 1, 1, 1, 1, 2, 1),
        'd' => array(1, 1, 1, 1, 1, 1, 1, 1, 2, 1),
        'e' => array(1, 1, 1, 1, 1, 1, 1, 1, 2, 1),
        'f' => array(1, 1, 2, 2, 2, 1, 1, 1, 2, 1),
        'g' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
        'h' => array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
        'i' => array(1, 1, 1, 1, 2, 2, 1, 1, 1, 1),
        'j' => array(1, 1, 1, 1, 2, 2, 1, 1, 1, 1));
    //pour que la valeur string écrite en majuscules soit acceptée j'applique
    //la fonction strtolower
    $string = strtolower($string);
    //pour débuter le tableau à 1
    $int = $int-1;
    //l'instruction switch équivaut à une série d'instructions if
    //pour comparer la même variable avec des valeurs différentes
    //on lui indique que dans la variable plateforme il y a des
    //lettres/chiffres , quand ça touchera les cases numérotées 1 = coulé
    //et quand ça sera sur la 2 = touché, si en dehors de tout ce tableau =
    //hors jeu.
    switch($plateforme[$string][$int]) {
        case 1:
            echo 'Coulé';
            break;
        case 2:
            echo 'Touché';
            break;
        //default est utilisé lorsque tous les autres cas ont échoué
        default:
            echo 'Hors-jeu';
            break;
    }
}
?>