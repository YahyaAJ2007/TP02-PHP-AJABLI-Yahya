<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2_EX09</title>
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
    <h1>Tableau Des Étudiant : </h1>
    <?php
        $notes = [
            "Amine" => 12,
            "Sara" => 16,
            "Youssef" => 8,
            "Lina" => 14,
            "Adam" => 10
        ];
        $somme = 0;
        $nombreEtudiant = 0;
        $nombreValidé = 0;
        $meilleurNote = -1;
        $meilleurEtudiant = "";
    ?>
    <table border="1">
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Résultat</th>
        </tr>
        <?php 
        foreach($notes as $etudiant => $note){
            echo "<tr>";
            echo "<td>$etudiant</td>";
            echo "<td>$note</td>";
            if($note >= 10){
                echo "<td>Validé</td>";
                $nombreValidé++;
            }else{
                echo "<td>Non Validé</td>";
            }
            echo "</tr>";
            $somme += $note;
            $nombreEtudiant++;
            if($note > $meilleurNote){
                $meilleurNote = $note;
                $meilleurEtudiant = $etudiant;
            }
        }
        $moyenne = $somme / $nombreEtudiant;
        ?>
    </table>
    <h1>Statistiques de la classe</h1>
    <p>Somme des notes : <?php echo $somme; ?></p>
    <p>Moyenne de la classe : <?php echo $moyenne; ?></p>
    <p>Nombre d'étudiants ayant validé : <?php echo $nombreValidé; ?></p>
    <p>Meilleure note : <?php echo $meilleurNote; ?></p>
    <p>Meilleur étudiant : <?php echo $meilleurEtudiant; ?></p>
    <a href="index.php">Accueil</a>
</body>
</html>