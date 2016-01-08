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
<?php
$calculRapide =array(
    'lien' => '../js/puzzle_memoire/calcul_rapide.html',
    'src'  => '../js/puzzle_memoire/images/calcul.jpg',
    'alt'  => 'image indisponible',
    'nom_jeux'=>'CALCUL RAPIDE'
);
?>
<a href="<?php echo $calculRapide['lien'] ?>" class="lien_image">
    <img src="<?php echo $calculRapide['src'] ?>" alt="<?php echo $casseBric['alt'] ?>"/>
</a>


<p class="description_jeux">
    Le principe du jeu est simple : il suffit de sauter d'un niveau à l'autre afin d'atteindre le panneau FINISH.Attention
    à ne pas tomber et a éviter tout en les crocodiles placés sur le chemin.Pour cela utiliser les touches 4,8,6 pour
    respectivement aller à gauche,sauter et aller à droite.
 </p>

<p class="jouer"><a href="<?php echo $calculRapide['lien'] ?>">JOUER</a></p>


<p class="titre_jeux"><?php echo $calculRapide['nom_jeux'] ?></p>



<?php ?>
</body>
</html>