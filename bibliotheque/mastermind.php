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

<a href="../js/mastermind-iphone/iFUN/index.html" class="lien_image">
    <img src="../js/mastermind-iphone/mastermind.PNG" alt="image indisponible"/>
</a>

<p class="description_jeux">
    Le but du Mastermind est de découvrir en moins de 10 essais une combinaison de 4 billes de couleurs différentes.A
    chaque essai, le joueur reçoit des indications sur les couleurs et les emplacements qu’il a choisis.
    Le joueur gagne cette manche s'il donne la bonne combinaison de pions sur la dernière rangée ou avant.

</p>

<p class="jouer"><a href="../js/mastermind-iphone/iFUN/index.html"> JOUER </a></p>

<p class="titre_jeux">MASTERMIND</p>


<?php ?>
</body>
</html>