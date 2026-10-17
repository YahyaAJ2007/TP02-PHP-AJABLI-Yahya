<title>TP2_EX05</title>
<?php 
$moyenne = null;
if(0 <= $moyenne || $moyenne <= 20){
    echo "Note Valide <br>";
    if($moyenne<10){
        echo "Non Validé";
    }else if($moyenne<=12){
        echo "Passable";
    }else if($moyenne<=14){
        echo "Assez Bien";
    }else if($moyenne<=16){
        echo "Bien";
    }else{
        echo "Trés Bien";
    }
}else{
    echo "Note invalide";
}
// $moyenne = -1;
// $moyenne = 9;
// $moyenne = 10;
// $moyenne = 12;
// $moyenne = 14;
// $moyenne = 16;
// $moyenne = 21;
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