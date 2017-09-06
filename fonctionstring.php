<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Les fonctions STRING en PHP</title>
</head>
<body>
<h1>Les fonctions prêtes à l'emploi</h1>
<?php
    echo strlen("bonjour").'<br/>';//cela permet d'afficher
//le nombre de caractères de la chaine mise en ()
echo str_word_count("bonjour à tous").'<br/>';
echo str_repeat("salut <br/>",7);

$texte="comment allez vous? ";
echo str_replace("allez vous","vas tu", $texte, $i);
echo'<br/> nombre de remplacements : '.$i;

$minimaj="bonjour vouS allEZ bIEN?<br/>";
echo strtolower($minimaj);
echo strtoupper($minimaj);

echo strpos("bonjour", "o").'<br/>';
echo strpos("bonjour à tous","tous").'<br/>';
echo strpos("bonjour","e").'<br/>';
?>
<p>les fonctions html</p>
<?php
$str='j\aime le <strong>"PHP"</strong>';
echo htmlspecialchars($str);

echo nl2br("bonjour !
    comment ça va ?");
$ch2tb="salute ça va ?";
print_r (explode(" ",$ch2tb));
$tb2ch=array('bonjour', 'a', 'tous');
echo (implode (" ", $tb2ch));

print_r (str_split("ciao",2));

?>
</body>
</html>