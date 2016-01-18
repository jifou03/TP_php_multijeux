<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'modifier mot de passe';
session_name("h8278");
session_start();
if ($_SESSION['pseudo'] == null) {
    header('Location: http://multijeuxphp.projetisi.com/index.php');
}

$pseudo = $_SESSION['pseudo'];

$in_post = array_key_exists('register', $_POST);

$password_ok = false;
if (array_key_exists('password', $_POST)) {
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_MAGIC_QUOTES);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $password_ok = (1 === preg_match('/^[A-Za-z0-9%&$!*?]{8,12}$/', $password)); // Validation du username : des alpha minuscules et chiffres, min 4 caractères
}

if ($password_ok) {

    $link = mysqli_connect("localhost", "root","") or die("Couldn't connect.");

    mysqli_select_db($link, 'multijeux') or die ("Couldn't connect AGAIN!");

    $password = sha1($password);

    $query = "UPDATE users SET password='$password' WHERE username='$pseudo'";
    mysqli_query($link, $query);

    header('Location: http://localhost/tp_php_multijeux/index.php');

    exit;
}

require_once 'view_parts/_page_base.php';
require_once 'view_parts/_header.php';
require_once 'view_parts/_main_menu.php';
?>

<h1><?= ucfirst($site_data[PAGE_ID]); ?></h1>
<?php
if ($_SESSION['pseudo'] != null) {
    echo "Bonjour " . $pseudo . ". Veuillez modifier votre mot de passe.";
}
?>
<form method="post" action="">
    <li><label class="inscription" for="password">Password :</label>
    <input class="<?php echo $in_post && $password_ok == false ? 'error' : ''?>" type="password" name="password" id="password"/>
    <span><?php echo $in_post && $password_ok == false ? 'Le mot de passe est invalide.' : ''?></span></li>
    <li><input type="submit" id="submit" name="register" value="Soumettre"/></li>
</form>
