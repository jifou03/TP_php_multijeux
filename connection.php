<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'connection';
require_once 'view_parts/_page_base.php';
require_once 'view_parts/_header.php';
require_once 'view_parts/_main_menu.php';
?>

<h1><?= ucfirst($site_data[PAGE_ID]); ?></h1>

<h2>Veuillez vous identifier</h2>
<form>
    <label for="username">Nom de l'utilisateur: </label>
    <input type="text" id="username" name="username">
    <label for="password">Mot de passe: </label>
    <input type="text" id="password" name="password">


</form>
<?php
require_once 'view_parts/_page_bottom.php'
?>
