<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2_EX07</title>
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
    <h1>1.Table de multiplication de 7 : </h1>
    <?php
    $nombre = 7;
    for($i=1;$i<=10;$i++){
        echo "$nombre x $i = " . $nombre * $i ."<br>";
    }
?>
    <h1>2.Pyramide</h1>
    <?php 
    for($i=1;$i<=6;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    ?>
    <a href="index.php">Accueil</a>
</body>
</html>