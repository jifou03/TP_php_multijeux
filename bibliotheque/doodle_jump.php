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

<a href="../js/doodle-jump-en-javascript/index.htm" class="lien_image">
    <img src="../js/doodle-jump-en-javascript/img/doodle_jeux.PNG" alt="image indisponible"/>
</a>

<p class="description_jeux">
    Le principe du jeu est simple : il suffit de rebondir de plate-forme en plate-forme avec l'interdiction de redescendre
    plus bas. Plus on arrive haut, plus le score augmente, et plus les choses se corsent, aussi. La maniabilité de la
    bestiole que l'on incarne est d'une précision redoutable, ce qui fait la grande force du jeu et lui permet d'offrir
    une grosse marge de progression.
 </p>

<p class="jouer"><a href="../js/doodle-jump-en-javascript/index.htm">JOUER</a></p>

<p class="titre_jeux">DOODLE JUMP</p>


<?php ?>
</body>
</html>