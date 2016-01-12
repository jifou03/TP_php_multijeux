<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'bibliotheque';
session_name("h8278");
session_start();
if ($_SESSION['pseudo'] == null) {
    header('Location: http://localhost/tp_php_multijeux/index.php');
}
require_once 'view_parts/_page_base.php';
require_once 'view_parts/_header.php';
require_once 'view_parts/_main_menu.php';

?>

<h1><?= ucfirst($site_data[PAGE_ID]); ?></h1>
<?php $biblio = array(
                        array(
                            'lien' => 'bibliotheque/calcul_rapide.php?jeu=cp',
                            'src'  => 'js/puzzle_memoire/images/calcul.jpg',
                            'alt'  => 'image indisponible',
                            'nom_jeux'=>'CALCUL RAPIDE',
                            ),
    array(
        'lien' => 'bibliotheque/doodle_jump.php?jeu=dj',
        'src'  => 'js/doodle-jump-en-javascript/img/doodle_jeux.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'DOODLE JUMP',
    ),
    array(
        'lien' => 'bibliotheque/invasion-extraterrestre.php?jeu=ie',
        'src'  => 'js/invasion-extraterrestre/invasion/res/invasion.jpg',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'INVASION EXTRATERRESTRE',
    ),
    array(
        'lien' => 'bibliotheque/jeu-de-mot-facile.php?jeu=jdmf',
        'src'  => 'js/jeu-de-mot-facile/jeux_de_mot.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'JEUX DE MOTS FACILE'
    ),
    array(
        'lien' => 'bibliotheque/puzzle.php?jeu=puzzle',
        'src'  => 'js/puzzle_memoire/images/puzzle.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'PUZZLE'
    ),

    array(
        'lien' => 'bibliotheque/moby-bros.php?jeu=mb',
        'src'  => 'js/moby-bros-l-aventurier-des-etoiles/moby.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'MOBY BROS'
    ),

    array(
        'lien' => 'bibliotheque/jeu-memory.php?jeu=jdm',
        'src'  => 'js/jeux-memory/jeuxCarte/jeux_memoire.png',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'JEUX DE MEMOIRE'
    ),

    array(
        'lien' => 'bibliotheque/jeu-du-sepent-snake.php?jeu=jdss',
        'src'  => 'js/jeux-du-serpent-snake/serpent/serpent.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'JEUX DU SERPENT SNAKE'
    ),

    array(
        'lien' => 'bibliotheque/mastermind.php?jeu=mastermind',
        'src'  => 'js/mastermind-iphone/mastermind.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'MASTERMIND'
    ),

    array(
        'lien' => 'bibliotheque/machine-a-sous.php?jeu=mas',
        'src'  => 'js/machine-a-sous/casino/casino.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'MACHINE A SOUS'
    ),
    array(
        'lien' => 'bibliotheque/casse_brick.php?jeu=cb',
        'src'  => 'js/casse-brick/pong/images/casse_brick.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'CASSSE BRICK'
    ),
    array(
        'lien' => 'bibliotheque/love-truc.php?jeu=lt',
        'src'  => 'js/love-trucator/Lvcalculator%20by%20mika-------------------/imagelv/love.PNG',
        'alt'  => 'image indisponible',
        'nom_jeux'=>'LOVE CALCULATOR'
    )
)

?>

<?php
    foreach ($biblio as $key => $val) { ?>
        <p class="biblio"><a href="<?php echo $biblio[$key]['lien'] ?>"><img src="<?php echo $biblio[$key]['src'] ?>"
                                                                             alt="<?php echo $biblio[$key]['alt'] ?>"/>
                <?php echo $biblio[$key]['nom_jeux'] ?></a></p>
    <?php }

?>




</body>
</html>