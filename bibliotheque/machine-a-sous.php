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
$machineSous =array(
'lien' => '../js/machine-a-sous/casino/machine.htm',
'src'  => '../js/machine-a-sous/casino/casino.PNG',
'alt'  => 'image indisponible',
'nom_jeux'=>'MACHINE A SOUS',
'description' => "Le principe du jeux est simple : Au début du jeux tu as 1000 crédits. Tu dois faire une mise de 25 crédits pour lancer une partie. Le résultat est aléatoire. Tu peux faire un gain
compris entre 400 et 1000 crédits.",
);
?>
<a href="<?php echo $machineSous['lien'] ?>" class="lien_image">
    <img src="<?php echo $machineSous['src'] ?>" alt="<?php echo $machineSous['alt'] ?>"/>
</a>

<p class="description_jeux">
    <?php echo $machineSous['description'] ?>
</p>

<p class="jouer"><a href="<?php echo $machineSous['lien'] ?>">JOUER</a></p>

<p class="titre_jeux"><?php echo $machineSous['nom_jeux'] ?></p>

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