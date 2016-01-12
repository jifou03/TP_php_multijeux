<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'connection';
session_name("h8278");
session_start();
if ((isset($_SESSION['pseudo']))) {
    header('Location: http://multijeuxphp.projetisi.com/index.php');
}
require_once 'view_parts/_page_base.php';
require_once 'view_parts/_header.php';
require_once 'view_parts/_main_menu.php';
?>

<h1><?= ucfirst($site_data[PAGE_ID]); ?></h1>

<h2>Veuillez vous identifier</h2>
<div id="connect">
<form action="test_connect.php" method="post">
    <p><label for="username">Nom de l'utilisateur: </label>
    <input type="text" id="username" name="username"></p>
    <p><label for="password">Mot de passe: </label>
    <input type="password" id="password" name="password"></p>
    <p><input type="submit" id="submit" name="submit" value="Soumettre"/></p>
</form>
</div>
<?php
require_once 'view_parts/_page_bottom.php';
 if (isset($_GET['error'])) {
     if ($_GET['error'] == 1) {
         echo "Le nom d'utilisateur et/ou le mot de passe n'est pas valide.";
     }
 }

?>

