<title>TP2_EX10</title>
<?php
if(isset($_POST["nom"],$_POST["prenom"],$_POST["groupe"]) 
    && trim($_POST["nom"]) !== ""
    && trim($_POST["prenom"]) !== ""
    && trim($_POST["groupe"]) !== ""){
        $nom = htmlspecialchars(trim($_POST["nom"]),ENT_QUOTES,"UTF-8");
        $prenom = htmlspecialchars(trim($_POST["prenom"]),ENT_QUOTES,"UTF-8");
        $groupe = htmlspecialchars(trim($_POST["groupe"]),ENT_QUOTES,"UTF-8");
        echo "Bienvenu $prenom $nom !<br>";
        echo "Votre Groupe est : $groupe<br>";
    }else{
        echo "Veuillez remplir tous les champs du formulaire.";
    }
?>