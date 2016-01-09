<?php
define('LIKE_ID','like_id');
define('SESS_LIKE','sess_like');
session_start();

if(! array_key_exists('session_like',$_SESSION)){
    $_SESSION['like']= array();
}


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
        a img{
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
            bottom :60%;

        }

        .like{
            width: 5%;
            vertical-align: top;
            color: red;
            position: absolute;
            left: 42%;
            bottom :45%;

        }
        .likes{
             width: 5%;
            vertical-align: top;
            color: red;
            position: absolute;
            left: 52%;
            bottom :45%;

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


?>
<?php
$calculRapide =array(
    'lien' => '../js/puzzle_memoire/calcul_rapide.html',
    'src'  => '../js/puzzle_memoire/images/calcul.jpg',
    'alt'  => 'image indisponible',
    'nom_jeux'=>'CALCUL RAPIDE'
);
?>
<a href="<?php echo $calculRapide['lien'] ?>" class="lien_image">
    <img src="<?php echo $calculRapide['src'] ?>" alt="<?php echo $calculRapide['alt'] ?>"/>
</a>


<p class="description_jeux">
    Le principe du jeu est simple : il suffit de sauter d'un niveau à l'autre afin d'atteindre le panneau FINISH.Attention
    à ne pas tomber et a éviter tout en les crocodiles placés sur le chemin.Pour cela utiliser les touches 4,8,6 pour
    respectivement aller à gauche,sauter et aller à droite.
 </p>


<p class="jouer"><a href="<?php echo $calculRapide['lien'] ?>">JOUER</a></p>

<p>
    <img src="../images/like.png" alt="<?php echo $calculRapide['alt'] ?>" id="img1" class="like" "/>

    <img src="<?php echo '../images/unlike.jpg'?>" alt="<?php echo $calculRapide['alt'] ?>" id="img2" class="likes" />
</p>
<p></p>

<?php  ?>
<p class="titre_jeux"><?php echo $calculRapide['nom_jeux'] ?></p>


<script>

    document.getElementById('img1').addEventListener ('click', function() {
        var img = document.getElementsByClassName('like')[0];
        console.log(img.src);
        if (img.src == 'http://localhost/tp_php_multijeux/images/like.png') {
            img.src = 'http://localhost/tp_php_multijeux/images/like0.jpg';
            console.log(img.src);
        } else if (img.src =='http://localhost/tp_php_multijeux/images/like0.jpg') {
            img.src = 'http://localhost/tp_php_multijeux/images/like.png';
        }
    });

    document.getElementById('img2').addEventListener ('click', function() {
        var img = document.getElementsByClassName('likes')[0];
        console.log(img.src);
        if (img.src == 'http://localhost/tp_php_multijeux/images/unlike.jpg') {
            img.src = 'http://localhost/tp_php_multijeux/images/unlike0.jpg';
            console.log(img.src);
        } else if (img.src =='http://localhost/tp_php_multijeux/images/unlike0.jpg') {
            img.src = 'http://localhost/tp_php_multijeux/images/unlike.jpg';
        }
    });
</script>
</body>
</html>