<title>TP2_EX06</title>
<?php
$numeroMois = (int) date("m");
switch($numeroMois){
    case 1 :
        echo "Janvier";
        break;
    case 2 :
        echo "Février ";
        break;
    case 3 :
        echo "Mars";
        break;
    case 4 :
        echo "Avril";
        break;
    case 5 :
        echo "Mai";
        break;
    case 6 :
        echo "Juin";
        break;
    case 7 :
        echo "Juillet";
        break;
    case 8 :
        echo "Août ";
        break;
    case 9 :
        echo "Septembre";
        break;
    case 10 :
        echo "Octobre";
        break;
    case 11 :
        echo "Novembre";
        break;
    case 12 :
        echo "Décembre ";
        break;
    default : 
        echo "Numéro de mois invalide";
    
}
?>
<br><br>
<style>
        a{
            display: inline-block;
            padding: 8px 12px;
            border-radius: 7px;
            border: none;
            text-decoration: none;
            background-color: #126dff;
            color: #c3bdf7;
            transition: .3s;
            font-weight: bold;
            margin-top: 10px;
        }
        a:hover{
            background-color: #364d72;
            color: #fff;
        }
</style>
<a href="index.php">Accueil</a>