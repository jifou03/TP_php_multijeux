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

<a href="../js/jeu-de-mot-facile/jsdico.html" class="lien_image">
    <img src="../js/jeu-de-mot-facile/jeux_de_mot.PNG" alt="image indisponible"/>
</a>

<p class="description_jeux">
    Le principe du jeu est simple : il suffit de deviner un mot à l'aide des indices qui vous sont donnés. Plus vous
    trouver de mots et plus vous avez de points. C'est génial !!!!!
 </p>

<p class="jouer"><a href="../js/jeu-de-mot-facile/jsdico.html">JOUER</a></p>

<p class="titre_jeux">JEUX DE MOT</p>


<?php ?>
</body>
</html>