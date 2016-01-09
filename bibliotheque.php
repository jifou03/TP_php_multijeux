<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'bibliotheque';
session_name("h8278");
session_start();
var_dump($_SESSION);

require_once 'view_parts/_page_base.php';
require_once 'view_parts/_header.php';
require_once 'view_parts/_main_menu.php';
?>

<h1><?= ucfirst($site_data[PAGE_ID]); ?></h1>
<?php $biblio = array(
                        array(
                            'lien' => 'bibliotheque/calcul_rapide.php',
                            'src'  => 'js/puzzle_memoire/images/calcul.jpg',
                            'alt'  => 'image indisponible',
                            'nom_jeux'=>'CALCUL RAPIDE',
                            'details' => "Le principe du jeu est simple : il suffit de sauter d'un niveau à l'autre afin d'atteindre le panneau FINISH.Attention
    à ne pas tomber et a éviter tout en les crocodiles placés sur le chemin.Pour cela utiliser les touches 4,8,6 pour
    respectivement aller à gauche,sauter et aller à droite.",
                        ),
    array(
        'lien' => 'bibliotheque/doodle_jump.php',
        'src'  => 'js/doodle-jump-en-javascript/img/doodle_jeux.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'DOODLE JUMP',
    ),
    array(
        'lien' => 'bibliotheque/invasion-extraterrestre.php',
        'src'  => 'js/invasion-extraterrestre/invasion/res/invasion.jpg',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'INVASION EXTRATERRESTRE',
    ),
    array(
        'lien' => 'bibliotheque/jeu-de-mot-facile.php',
        'src'  => 'js/jeu-de-mot-facile/jeux_de_mot.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'JEUX DE MOTS FACILE'
    ),
    array(
        'lien' => 'bibliotheque/puzzle.php',
        'src'  => 'js/puzzle_memoire/images/puzzle.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'PUZZLE'
    ),
    array(
        'lien' => 'bibliotheque/jeu-du-sepent-snake.php',
        'src'  => 'js/jeux-du-serpent-snake/serpent/serpent.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'JEUX DU SERPENT SNAKE'
    ),
    array(
        'lien' => 'bibliotheque/jeu-memory.php',
        'src'  => 'js/jeux-memory/jeuxCarte/jeux_memoire.png',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'JEUX DE MEMOIRE'
    ),
    array(
        'lien' => 'bibliotheque/machine-a-sous.php',
        'src'  => 'js/machine-a-sous/casino/casino.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'MACHINE A SOUS'
    ),
    array(
        'lien' => 'bibliotheque/mastermind.php',
        'src'  => 'js/mastermind-iphone/mastermind.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'MASTERMIND'
    ),
    array(
        'lien' => 'bibliotheque/moby-bros.php',
        'src'  => 'js/moby-bros-l-aventurier-des-etoiles/moby.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'MOBY BROS'
    ),
    array(
        'lien' => 'bibliotheque/casse_brick.php',
        'src'  => 'js/casse-brick/pong/images/casse_brick.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'CASSSE BRICK'
    ),
    array(
        'lien' => 'bibliotheque/love-truc.php',
        'src'  => 'js/love-trucator/Lvcalculator%20by%20mika-------------------/imagelv/love.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'LOVE CALCULATOR'
    )
)

?>
<?php

/*foreach($biblio as $key => $val){
    echo "<p class=\"biblio\"><a href=\"<?php echo $biblio[$key]['lien'] ?>\"><img src=\"<?php echo $biblio[$key]['src'] ?>\" alt=\"<?php echo $biblio[$key]['alt'] ?>\"/>
        <?php echo $biblio[$key]['nom_jeux'] ?></a></p>";
}*/



?>

<p class="biblio"><a href="<?php echo $biblio[0]['lien'] ?>"><img src="<?php echo $biblio[0]['src'] ?>" alt="<?php echo $biblio[0]['alt'] ?>"/>
        <?php echo $biblio[0]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[1]['lien'] ?>"><img src="<?php echo $biblio[1]['src'] ?>" alt="<?php echo $biblio[1]['alt'] ?>"/>
        <?php echo $biblio[1]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[2]['lien'] ?>"><img src="<?php echo $biblio[2]['src'] ?>" alt="<?php echo $biblio[2]['alt'] ?>"/>
        <?php echo $biblio[2]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[3]['lien'] ?>"><img src="<?php echo $biblio[3]['src'] ?>" alt="<?php echo $biblio[3]['alt'] ?>"/>
        <?php echo $biblio[3]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[4]['lien'] ?>"><img src="<?php echo $biblio[4]['src'] ?>" alt="<?php echo $biblio[4]['alt'] ?>"/>
        <?php echo $biblio[4]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[5]['lien'] ?>"><img src="<?php echo $biblio[5]['src'] ?>" alt="<?php echo $biblio[5]['alt'] ?>"/>
        <?php echo $biblio[5]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[6]['lien'] ?>"><img src="<?php echo $biblio[6]['src'] ?>" alt="<?php echo $biblio[6]['alt'] ?>"/>
        <?php echo $biblio[6]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[10]['lien'] ?>"><img src="<?php echo $biblio[10]['src'] ?>" alt="<?php echo $biblio[10]['alt'] ?>"/>
        <?php echo $biblio[10]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[8]['lien'] ?>"><img src="<?php echo $biblio[8]['src'] ?>" alt="<?php echo $biblio[8]['alt'] ?>"/>
        <?php echo $biblio[8]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[9]['lien'] ?>"><img src="<?php echo $biblio[9]['src'] ?>" alt="<?php echo $biblio[9]['alt'] ?>"/>
        <?php echo $biblio[9]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[7]['lien'] ?>"><img src="<?php echo $biblio[7]['src'] ?>" alt="<?php echo $biblio[7]['alt'] ?>"/>
        <?php echo $biblio[7]['nom_jeux'] ?></a></p>
<p class="biblio"><a href="<?php echo $biblio[11]['lien'] ?>"><img src="<?php echo $biblio[11]['src'] ?>" alt="<?php echo $biblio[11]['alt'] ?>"/>
        <?php echo $biblio[11]['nom_jeux'] ?></a></p>



</body>
</html>