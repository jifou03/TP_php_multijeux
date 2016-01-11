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
        a img{
            width:  137%;
            height: 190%;
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
        .like{
            width: 50px;
            height:50px;
            position: absolute;
            left: 42%;
            bottom :32%;

        }
        .likes{
            width: 50px;
            height:50px;
            position: absolute;
            left: 48%;
            bottom :29.5%;

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
$motfacile =array(
    'lien' => '../js/jeu-de-mot-facile/jsdico.html',
    'src'  => '../js/jeu-de-mot-facile/jeux_de_mot.PNG',
    'alt'  => 'image indisponible',
    'nom_jeux'=>'JEUX DE MOT FACILE',
    'description' => "Tu dois trouver le mot mystere en te servant des indices qui te sont donnés.Plus tu trouves des mots plus tu gagnes des points..Facile hein.. Allez hop!!!
A toi de jouer!!!",
);
?>

<a href="<?php echo $motfacile['lien']?>" class="lien_image">
    <img src="<?php echo $motfacile['src']?>" alt="<?php echo $motfacile['alt']?>"/>
</a>

<p class="description_jeux">
    <?php echo $motfacile['description']?>
 </p>

<p class="jouer"><a href="<?php echo $motfacile['lien']?>">JOUER</a></p>

<p class="titre_jeux"><?php echo $motfacile['nom_jeux']?></p>

<p>
    <img src="../images/like.png" alt="image indisponible" id="img1" class="like" "/>

    <img src="<?php echo '../images/unlike.png'?>" alt="image indisponible" id="img2" class="likes" />
</p>

<script>

    document.getElementById('img1').addEventListener ('click', function() {
        var img = document.getElementsByClassName('like')[0];
        var img2 = document.getElementsByClassName('likes')[0];
        console.log(img.src);
        if (img.src == 'http://localhost/tp_php_multijeux/images/like.png') {
            img.src = 'http://localhost/tp_php_multijeux/images/like0.png';
            img2.src = 'http://localhost/tp_php_multijeux/images/unlike.png';
            console.log(img.src);
        } else if (img.src =='http://localhost/tp_php_multijeux/images/like0.png') {
            img.src = 'http://localhost/tp_php_multijeux/images/like.png';
        }
    });

    document.getElementById('img2').addEventListener ('click', function() {
        img2 = document.getElementsByClassName('likes')[0];
        img = document.getElementsByClassName('like')[0];
        console.log(img.src);
        if (img2.src == 'http://localhost/tp_php_multijeux/images/unlike.png') {
            img2.src = 'http://localhost/tp_php_multijeux/images/unlike0.png';
            img.src = 'http://localhost/tp_php_multijeux/images/like.png';
            console.log(img2.src);
        } else if (img2.src =='http://localhost/tp_php_multijeux/images/unlike0.png') {
            img2.src = 'http://localhost/tp_php_multijeux/images/unlike.png';
        }
    });
</script>
<?php ?>
</body>
</html>