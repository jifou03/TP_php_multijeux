<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'modifier mot de passe';
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
<?php
    echo "Salut";
?>