<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2_EX08</title>
    <style>
        a{
            display: inline-block;
            padding: 8px 12px;
            border-radius: 7px;
            border: none;
            text-decoration: none;
            background-color: #126dff;
            color: #d6cce7;
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
    <h1>Les nombres pairs de 0 à 20 : </h1>
    <?php 
    $i = 0;
    while($i <= 20){
        if ($i == 10)
            echo "<strong>$i</strong><br>";
        else
            echo $i . "<br>";
        $i += 2;
    }
    ?>
     <h1>2. Comparaison entre while et do-while</h1>
    <?php
    $compteur = 5;
    $exécutions = 0;
    do{
        $compteur++;
        $exécutions++;
    }while($compteur < 5);
    echo "Nombre d'exécutions de do-while : $exécutions<br>";
    ?>
    <?php
    $compteur = 5;
    $exécutions = 0;
    while($compteur < 5){
        $compteur++;
        $exécutions++;
    }
    echo "Nombre d'exécutions de while : $exécutions<br>";
    ?>
    <h1>3. Utilisation de continue et break</h1>
    <?php
    for($i=0;$i<=20;$i++){
        if($i >= 16)
            break;
        if($i % 3 == 0)
            continue;
        echo  "$i<br>";
    }
    ?>
    <a href="index.php">Accueil</a>
</body>
</html>
