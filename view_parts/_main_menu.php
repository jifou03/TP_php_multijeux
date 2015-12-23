<?php
$menu_data = array (
    'Accueil' => 'index.php',
    'Connection' => 'connection.php',
    'Inscription' => 'inscription.php',
    'Dashboard' => 'dashboard.php'
);
?>

<ul>
    <?php
    foreach ($menu_data as $menu => $menu_url) {
        echo "<li class='menu'><a href='".$menu_url."'>$menu</a></li>";
    }
    ?>
</ul>