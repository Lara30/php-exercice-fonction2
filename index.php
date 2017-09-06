<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great%7CSource+Sans+Pro" rel="stylesheet">
    <script src="jquery-3.2.1.js"></script>
    <script src=“https://code.jquery.com/jquery-3.2.1.min.js”
            integrity=“sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=”
            crossorigin=“anonymous”></script>
    <link rel="stylesheet"href="style.css"/>
    <title>Exercice PHP</title>
</head>

<header>
    <h1>Les fonctions en PHP</h1>
</header>

<body>
<!--Créez une fonction PHP qui affiche une boîte d’alerte à partir
de la fonction JavaScript dont la syntaxe est alert("chaine_de
caractères") . Cette fonction peut être appelée avec comme
paramètre le texte du message à afficher. Elle est particulièrement
 utile pour afficher des messages d’erreur de manière élégante,
 sans que ces derniers restent écrits dans la page.!-->
<input type="button" name="yes" value="O/N" onclick="call();">
<?php
echo "
   <script type='text/javascript' language='javascript'>
     function call() {
      if (confirm('Vous désirez vraiment quitter?')) {
         alert('oui')
      }
      else {
          alert('non')
      }};
    </script>"
?>

<!--Écrivez une fonction dont le paramètre passé par référence est
 un tableau de chaînes de caractères et qui transforme chacun des
 éléments du tableau de manière que le premier caractère soit en
 majuscule et les autres en minuscules, quelle que soit la casse
 initiale des éléments, même si elle est mixte. Le passage par
 référence c'est cela : http://php.net/manual/fr/language.
 references.pass.php !-->

<?php
$days = array('lUndi', 'MArdi', 'jeuDI', 'veNDREDI');
function essai(&$days){
}
foreach ($days as $jours) {
    $jours=array_map(strtolower, $days);
    $date=array_map(ucfirst,$jours);
};
print_r($days);
print_r($jours);
print_r($date);
?>
<!--## Exercice 3
* **Petite Bataille Navale**
* A partir de l'image du tableau Exo_php.png :
* Construire le tableau associatif php, correspondants aux lignes et aux colonnes de l'image.!-->

</body>
</html>