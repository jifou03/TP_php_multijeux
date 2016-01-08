<?php
$menu_data = array (
    'Accueil' => 'index.php',
    'jeux' => 'contact.php',
    'Inscription' => 'inscription.php',
    'Bibliothèque' =>'bibliotheque.php',
    'Modifier mot de passe' => 'modifier_mdp.php',
    'Deconnexion' => 'deconnexion.php'
);
?>

<ul>
    <?php
    foreach ($menu_data as $menu => $menu_url) {
        echo "<li class='main_menu'><a href='".$menu_url."'>$menu</a></li>";
    }
    ?>
</ul>