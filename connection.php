<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'connection';
session_name("h8278");
session_start();
if ((isset($_SESSION['pseudo']))) {
    header('Location: http://multijeuxphp.projetisi.com/index.php');
}
$in_post = ('POST' == $_SERVER['REQUEST_METHOD']);

$link = mysqli_connect("localhost","multijeux","multijeux") or die("Couldn't connect wtf");
mysqli_select_db($link, 'p62a15tpinda_multijeuxdb') or die ("Couldn't connect AGAIN");

mysqli_query($link, $query);

if (array_key_exists('password', $_POST) AND array_key_exists('username', $_POST)) {
    if ( !empty($_POST['password'] AND !empty($_POST['username'])) ){
        if ($_POST['username'] == $get_user_info['username'] AND sha1($_POST['password']) == $get_user_info['password']) {
            session_name("h8278");
            session_start();
            $_SESSION['pseudo'] = $_POST['username'];
            header('Location: http://multijeuxphp.projetisi.com/connection.php/index.php');
        } else {
            header('Location: http://multijeuxphp.projetisi.com/connection.php?error=1');
        }
    } else {
        header('Location: http://multijeuxphp.projetisi.com/connection.php?error=1');
    }
} else {
    header('Location: http://multijeuxphp.projetisi.com/connection.php?error=1');
}

header('Location: http://multijeuxphp.projetisi.com/index.php');
exit;


require_once 'view_parts/_page_base.php';
require_once 'view_parts/_header.php';
require_once 'view_parts/_main_menu.php';
?>

<h1><?= ucfirst($site_data[PAGE_ID]); ?></h1>

<h2>Veuillez vous identifier</h2>
<div id="connect">
<form action="" method="post">
    <p><label for="username">Nom de l'utilisateur: </label>
    <input type="text" id="username" name="username"></p>
    <p><label for="password">Mot de passe: </label>
    <input type="password" id="password" name="password"></p>
    <p><input type="submit" id="submit" name="submit" value="Soumettre"/></p>
</form>
    <?php
    require_once 'view_parts/_page_bottom.php';


    if (isset($_GET['error'])) {
        if ($_GET['error'] == 1) {
            echo "Le nom d'utilisateur et/ou le mot de passe n'est pas valide.";
            header('Location:connection.php');
        } else if ($_GET['error'] != 1){
            header('Location: connection.php');
        }
    }
    ?>
</div>
<?php
require_once 'view_parts/_page_bottom.php';
?>

