<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Les conditions en PHP</title>
</head>
    <body>
        <?php
        $note=1;
        if ($note==0){
            echo "nul";
        }
        elseif ($note==5) {
            echo "pas bon";
        }
        elseif ($note==10) {
            echo "moyen";
        }
        elseif ($note==16){
            echo "bien joué";
        }
        elseif ($note==20){
            echo "parfait";
        }
        else  {
            echo "aucun com";
        }
        //avec le SWITCH
        switch ($note) {
            case 0:
                echo "nul";
            break;
            //les break sont nécessaires pour pas que tout s'enchaine
            case 16:
                echo "bien";
            break;
            case 20:
                echo "excellent";
            break;
            //pour tous les autres cas
            default :
                echo "aucun com";
        }
        ?>
        <!--ici on mélange le php et l'html!-->
        <?php
        $etudiant=true;
        if ($etudiant){
            ?>
        <p>étudiant</p>
        <?php
        }
        ?>

    </body>
</html>