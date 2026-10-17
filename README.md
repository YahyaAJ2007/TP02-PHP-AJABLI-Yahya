# TP02-PHP-AJABLI-Yahya
TP 02 PHP — Programmation Web 2 — 2026/2027

<!-- Exercice 2 : -->

Note != note car <PHP> est sensible a la case (N != n).
`$a` : TRUE.
`$_a` : TRUE.
`$a_a` : TRUE.
`$AAA` : TRUE.
`$a!` : FALSE. la bonne reponse --> `$a or $a_`
`$1a` : FALSE. la bonne reponse --> `$a`
`$a1` : TRUE.
 
 <!-- Exercice 4 : -->

`echo` sert à afficher une valeur sous forme de texte. d'ou echo false n'affiche rien car false est convertie en chaine vide. Alors que `var_dump()` affiche le type et la valeur d'une variable, ainsi  `var_dump(false) affiche bool(false)`.


<!-- Exercice 5 :  -->

`$moyenne` = -1 : Note invalide
`$moyenne` = 9 : Non validé
`$moyenne` = 10 : Passable
`$moyenne` = 12 : Assez bien
`$moyenne` = 14 : Bien
`$moyenne` = 16 : Très bien
`$moyenne` = 21 : Note invalide

<!-- Exercice 6 : -->

`1` : Janvier.
`3` : Mars.
`12`: Décembre.
`15`: Numéro de mois invalide.

<!-- Exercice 10 :  -->

`URL` : http://localhost:8000/ex10_get.php?nom=Ajabli&prenom=Yahya&groupe=G2

La méthode `GET` permet de transmettre les données visibles dans l'URL, Elle convient notamment aux recherches et aux filtres, mais  cette methode n'est pas adaptée à l'envoi de données sensibles.


`URL` : http://localhost:8000/ex10_post.php

La méthode `Post` permet de transmettre les données invisibles dans l'URL, Contrairement à la méthode GET, les valeurs envoyées avec POST n'apparaissent pas dans l'URL : elles sont transmises dans le corps de la requête HTTP.