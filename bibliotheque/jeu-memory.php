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

<a href="../js/jeux-memory/jeuxCarte/index.html" class="lien_image">
    <img src="../js/jeux-memory/jeuxCarte/jeux_memoire.png" alt="image indisponible"/>
</a>

<p class="description_jeux">
    Le jeu se compose de paires de cartes portant des illustrations identiques. L'ensemble des cartes est mélangé, puis
    étalé face contre table. À son tour, chaque joueur retourne deux cartes de son choix. S'il découvre deux cartes
    identiques, il les ramasse et les conserve, ce qui lui permet de rejouer. Si les cartes ne sont pas identiques, il
    les retourne faces cachées à leur emplacement de départ.Le jeu se termine quand toutes les paires de cartes ont été
    découvertes et ramassées
 </p>

<p class="jouer"><a href="../js/jeux-memory/jeuxCarte/index.html">JOUER</a></p>

<p class="titre_jeux">JEUX DE MEMOIRE</p>


<?php ?>
</body>
</html>