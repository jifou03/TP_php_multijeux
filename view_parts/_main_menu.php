<?php
$menu_data = array (
    'Accueil' => 'index.php',
    'jeux' => 'contact.php',
    'Inscription' => 'inscription.php',
    'Bibliothèque' =>'bibliotheque.php',
    'Mon profil' => 'dashboard.php'
);
?>

<ul>
    <?php
    foreach ($menu_data as $menu => $menu_url) {
        echo "<li><a href='".$menu_url."'>$menu</a></li>";
    }
    ?>
</ul>