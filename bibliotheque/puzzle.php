<?php

session_start();

$thumb_is_up = false;
if(! array_key_exists('thumb',$_SESSION)){
    $_SESSION['thumb']= false;
}
if(array_key_exists('thumb',$_GET)){


    if($_GET['thumb'] == 'up'){
        $_SESSION['thumb']= true;
        $thumb_is_up = true;
    }else if($_GET['thumb'] == 'down'){
        $_SESSION['thumb']= false;
        $thumb_is_up = false;

    }
} else{
    $thumb_is_up = $_SESSION['thumb'];

}
$thumb_is_down = false;
if(! array_key_exists('thumb',$_SESSION)){
    $_SESSION['thumb']= false;
}
if(array_key_exists('thumb',$_GET)){


    if($_GET['thumb'] == 'down'){
        $_SESSION['thumb']= true;
        $thumb_is_down = true;
    }else if($_GET['thumb'] == 'up'){
        $_SESSION['thumb']= false;
        $thumb_is_down = false;

    }
} else{
    $thumb_is_down = $_SESSION['thumb'];

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
        .imgcontour{
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
        .retour{
            position: absolute;
            left: 45%;
            bottom :9.5%;

        }

    </style>
</head>
<body>
<?php
$puzzle =array(
    'lien' => '../js/puzzle_memoire/puzzle.html',
    'src'  => '../js/puzzle_memoire/images/puzzle.PNG',
    'alt'  => 'image indisponible',
    'nom_jeux'=>'PUZZLE',
    'description' => "Dans ce jeu de réflexion une image est découpée en 12 pièces. Ces pièces sont mises en désordre. Tu dois déplacer les objets à ta manière afin de réecreer la forme initiale
en remettant en ordre chacune des pièces.",
);
?>
<a href="<?php echo $puzzle['lien'] ?>" class="lien_image">
    <img src="<?php echo $puzzle['src'] ?>" alt="<?php echo $puzzle['alt'] ?>" class="imgcontour"/>
</a>

<p class="description_jeux">
    <?php echo $puzzle['description'] ?>
 </p>

<p class="jouer"><a href="<?php echo $puzzle['lien'] ?>">JOUER</a></p>

<p class="titre_jeux"><?php echo $puzzle['nom_jeux'] ?></p>

<p>

    <a href="puzzle.php?thumb=up"><img src=" ../images/<?php echo $thumb_is_up? 'like0.png' : 'like.png'?>"
                                            alt="<?php echo $puzzle['alt'] ?>" id="img1" class="like" "/></a>

    <a href="puzzle.php?thumb=down"><img src="../images/<?php echo $thumb_is_down? 'unlike0.png' : 'unlike.png'?>"
                                              alt="<?php echo $puzzle['alt'] ?>" id="img2" class="likes" /></a>
</p>
<p><a href="../bibliotheque.php" class="retour">Retour vers la bibliotheque</a></p>


</body>
</html>