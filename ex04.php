<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2_EX04</title>
    <style>
        a{
            padding: 8px 12px;
            border-radius: 7px;
            border: none;
            text-decoration: none;
            background-color: #126dff;
            color: #dedbf7;
            transition: .3s;
            font-weight: bold;
        }
        a:hover{
            background-color: #364d72;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php
        $v1 = 42;
        $v2 = "42";
        $v3 = 15.8;
        $v4 = true;
        $v5 = false;
        $v6 = null;
        echo "<h3>1.Types : </h3>";
        echo "<pre>";
            var_dump($v1, $v2, $v3, $v4, $v5, $v6);
        echo "</pre>";
        echo "<h3>2.Conversions : </h3>";
        $intv2 = (int) $v2;
        $intv3 = (int) $v3;
        $strv1 = (string) $v1;
        echo "<pre>";
            var_dump($intv2,$intv3,$strv1);
        echo "</pre>";
        echo "<h3>3.Affichage True & False : </h3>";
        echo "Affiche True <echo> : ";
        echo true;
        echo "<br>";
        echo "Affiche False <echo> : ";
        echo false;
        echo "<pre>";
            var_dump($v4,$v5);
        echo "</pre>";
        echo "<h3>4.Conversions en Booléens : </h3>";
        $x1 = (bool) 0;
        $x2 = (bool) "0";
        $x3 = (bool) "PHP";
        $x4 = (bool) [];
        echo "<pre>";
            var_dump($x1,$x2,$x3,$x4);
        echo "</pre>";
    ?>
    <a href="index.php">Accueil</a>
</body>
</html>