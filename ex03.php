<?php
    const TAUX_TVA = 20;
    const DEVISE = "MAD";
    $HT = 60;
    $quantité = 3;
    $Total = $HT * $quantité;
    $Tva = ($Total * TAUX_TVA)/100;
    $TTC = $Total + $Tva;
    $MF = $TTC;
    $MF += 15;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2_EX03</title>
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
</head>
<body>
    <h1>Correction Exercice_03</h1>
    <?php
        echo "<li>Total HT = $Total ". DEVISE ."</li>";
        echo "<li>TVA = $Tva ". DEVISE ."</li>";
        echo"<li>Total TTC = $TTC ". DEVISE ."</li>";
        echo "<li>Frais de livraison = 15 " . DEVISE . "</li>";
        echo"<li>Montant final = $MF ". DEVISE ."</li>";
        if(defined("TAUX_TVA")){
            echo "TAUX_TVA existe";
        }else{
            echo "TAUX_TVA n'existe pas";
        }
    ?>
    <br>
    <a href="index.php">Accueil</a>
</body>
</html>