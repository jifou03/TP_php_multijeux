<?php



?>
<!DOCTYPE html>
<html>
<head>
    <title> galerie </title>
    <meta charset="utf-8" />
    <style>

        .lien_image{
            width:25%;
            display: inline-block;
            height: 200px;
            margin: 3%;

        }
        img{
            width:  477px;
            height: 400px;
            border: 1px solid black;
        }
        .description_jeux{
            width:35%;
            display: inline-block;
            vertical-align: top;
            height: 200px;
            margin-left: 10%;
            margin-top: 3%;

        }

        .jouer{
            width: 35%;
            display: inline-block;
            vertical-align: top;
            color: blue;
            position: absolute;
            left: 50%;
            bottom :50%;

        }


        .titre_jeux,.titre_jeux a{
            width: 50%;
            height: 20px;
            margin: 1%;
            padding: 0px;
            position: relative;
            left: 2%;
            color: #0e9aff;
            font-weight: bold;
            text-decoration: underline;
            font-size:32px;

        }


    </style>
</head>
<body>

<a href="../js/jeux-du-serpent-snake/serpent/serpent%20html/serpent%20html.html" class="lien_image">
    <img src="../js/jeux-du-serpent-snake/serpent/serpent.PNG" alt="image indisponible"/>
</a>

<p class="description_jeux">
    Le joueur dirige un serpent qui avance inlassablement dans une cage. Il s'allonge chaque fois qu'il mange et gagne
    des points par la meme occasion. S'il se mord la queue ,il meurt et la partie s'achève.

 </p>

<p class="jouer"><a href="../js/jeux-du-serpent-snake/serpent/serpent%20html/serpent%20html.html">JOUER</a></p>

<p class="titre_jeux">SNAKE</p>


<?php ?>
</body>
</html>