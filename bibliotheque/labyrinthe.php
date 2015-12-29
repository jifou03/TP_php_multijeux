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

<a href="../js/labyrinthe/labyrinthe/Labyrinthe.html" class="lien_image">
    <img src="../js/labyrinthe/labyrinthe/labyrinthe.PNG" alt="image indisponible"/>
</a>

<p class="description_jeux">
    Le but du Labyrinthe est un jeu de plateau tactique où le joueur doit créer des chemins dans un labyrinthe
    formé de tuiles afin de se rendre sur des emplacement précis.
 </p>

<p class="jouer"><a href="../js/labyrinthe/labyrinthe/Labyrinthe.html">JOUER</a></p>

<p class="titre_jeux">LABYRINTHE</p>


<?php ?>
</body>
</html>