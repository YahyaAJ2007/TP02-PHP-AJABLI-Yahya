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
<?php 
echo "<title>TP2_EX02</title>";
    echo "<h1>Correction Exercice_02</h1>";
    $nom = "Ajabli";
    $prenom = "Yahya";
    $age = 19;
    $formation = "Informatique Appliquée";
    $phrase = "Je m'appelle $prenom $nom, J'ai $age ans, et je suis une formation en $formation";
    $phrase .= " J'apprends PHP.";
    // Variables sensibles à la casse "N!=n"
    $note = 12;
    $Note = 16;
    echo $phrase . "<br>";
    echo "note : " . $note . "<br>";
    echo "Note : " . $Note . "<br><br>";
    echo '<a href="index.php">Accueil</a>';
?>