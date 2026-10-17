<title>TP2_EX10</title>
<?php
if(isset($_GET["nom"],$_GET["prenom"],$_GET["groupe"]) 
    && trim($_GET["nom"]) !== ""
    && trim($_GET["prenom"]) !== ""
    && trim($_GET["groupe"]) !== ""){
        $nom = htmlspecialchars(trim($_GET["nom"]),ENT_QUOTES,"UTF-8");
        $prenom = htmlspecialchars(trim($_GET["prenom"]),ENT_QUOTES,"UTF-8");
        $groupe = htmlspecialchars(trim($_GET["groupe"]),ENT_QUOTES,"UTF-8");
        echo "Bienvenu $prenom $nom !<br>";
        echo "Votre Groupe est : $groupe<br>";
    }else{
        echo "Veuillez remplir tous les champs du formulaire.";
    }
?>