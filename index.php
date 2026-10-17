<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP02</title>
    <style>
        body{
            background-color: #5d83ff;
        }
        h1{
            text-align: center;
            text-decoration: underline;
            color: #000000;
        }
        .exercices{
            list-style: none;
            padding: 0;
            margin: 30px auto;
            max-width: 750px;
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 20px;
        }
        .exercices li a{
            font-weight: bold;
            align-items: center;
            text-align: center;
            display: block;
            text-decoration: none;
            padding: 20px 12px;
            background-color: #074d93;
            color: #f2f1f5;
            border-radius: 8px;
            transition: 0.3s;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
        }
        .exercices li a:hover {
            transform: translateY(-3px);
            background-color: #0051d3;
            color: white;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <h1>Correction TP-02 PHP</h1>
    <ul class="exercices">
        <li><a href="ex01.php">Exercice_1</a></li>
        <li><a href="ex02.php">Exercice_2</a></li>
        <li><a href="ex03.php">Exercice_3</a></li>
        <li><a href="ex04.php">Exercice_4</a></li>
        <li><a href="ex05.php">Exercice_5</a></li>
        <li><a href="ex06.php">Exercice_6</a></li>
        <li><a href="ex07.php">Exercice_7</a></li>
        <li><a href="ex08.php">Exercice_8</a></li>
        <li><a href="ex09.php">Exercice_9</a></li>
        <li><a href="ex10_get.html">Exercice_10 (html-Get)</a></li>
        <li><a href="ex10_get.php">Exercice_10 (PHP-Get)</a></li>
        <li><a href="ex10_post.php">Exercice_10 (PHP-Post)</a></li>
        <li><a href="ex10_post.html">Exercice_10 (html-post)</a></li>
    </ul>
</body>
</html>