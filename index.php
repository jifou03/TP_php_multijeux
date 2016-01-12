<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'index';
session_name("h8278");
session_start();
require_once 'view_parts/_page_base.php';
require_once 'view_parts/_header.php';
require_once 'view_parts/_main_menu.php';
?>


<div id="main">
    <h1>Bienvenue sur Multijeux</h1>
    <?php
    if(isset($_SESSION['pseudo']))
    {
        echo '<p id="bienvenue">', "Bonjour " . $_SESSION['pseudo'] . ".</p><br/><p>Veuillez aller dans la bibliothèque pour consulter notre liste de jeux.", '</p>';
    } else {echo "<p>Si vous etes un nouveau visiteur de ce site de jeux,<br/> clique sur
        le bouton ci-dessous afin de vous inscrire.</p>
        <a href='inscription.php'><input type='button' value='inscrivez-vous ici' ></a>
        <P>Si vous est déja inscrit cliquez sur le bouton suivant pour vous connecter</P>
        <a href='connection.php'><input type='button' value='connectez-vous ici' ></a>";
    }?>
</div>
<?php
require_once 'view_parts/_page_bottom.php';
?>
