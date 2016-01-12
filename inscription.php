<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'inscription';

$in_post = ('POST' == $_SERVER['REQUEST_METHOD']);
// $in_post = array_key_exists('register', $_POST); // <--- fait la même chose que en l'autre d'avant
$nom_ok = false;
if (array_key_exists('nom', $_POST)) {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_MAGIC_QUOTES);
    $nom = filter_var($nom, FILTER_SANITIZE_STRING);
    $nom_ok = (1 === preg_match('/^[A-Za-z0-9\-ç]{4,}$/', $nom)); // Validation du username : des alpha minuscules et chiffres, min 4 caractères


}

$prenom_ok = false;
if (array_key_exists('prenom', $_POST)) {
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_MAGIC_QUOTES);
    $prenom = filter_var($prenom, FILTER_SANITIZE_STRING);
    $prenom_ok = (1 === preg_match('/^[A-Za-z0-9ç\-]{4,}$/', $prenom)); // Validation du username : des alpha minuscules et chiffres, min 4 caractères

}

$pseudo_ok = false;
if (array_key_exists('pseudo', $_POST)) {
    $pseudo = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_MAGIC_QUOTES);
    $pseudo = filter_var($pseudo, FILTER_SANITIZE_STRING);
    $pseudo_ok = (1 === preg_match('/^[A-Za-z0-9]{2,}$/', $pseudo)); // Validation du username : des alpha minuscules et chiffres, min 4 caractères
    if ($pseudo_ok) {

    }

}

$password_ok = false;
if (array_key_exists('password', $_POST)) {
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_MAGIC_QUOTES);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $password_ok = (1 === preg_match('/^[A-Za-z0-9%&$!*?]{8,12}$/', $password)); // Validation du username : des alpha minuscules et chiffres, min 4 caractères

}

$courriel_ok = false;
if (array_key_exists('courriel', $_POST)) {
    $courriel = filter_input(INPUT_POST, 'courriel', FILTER_SANITIZE_EMAIL);
    $courriel = filter_var($courriel, FILTER_VALIDATE_EMAIL);
    $courriel_ok = (false !== $courriel);
}

$gender_ok = false;
if (array_key_exists('gender', $_POST)) {
    $gender_ok = array_key_exists('gender', $_POST);
}

if ($nom_ok && $prenom_ok && $password_ok && $courriel_ok && $pseudo_ok && $gender_ok) {

    $nomutilisateur = $_POST['pseudo'];
    $password = sha1($_POST['password']);
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $courriel = $_POST['courriel'];
    $sexe = $_POST['gender'];

    $link = mysqli_connect("localhost","p62a15tpinda_multijeuxdb","multijeux","multijeux") or die("Couldn't connect wtf");

    mysqli_select_db($link, 'p62a15tpinda_multijeuxdb') or die ("Couldn't connect AGAIN");

    $query = "INSERT INTO users (username, password, prenom, nom, courriel, sexe)
    VALUES ('$nomutilisateur', '$password', '$prenom', '$nom', '$courriel', '$sexe')";

    mysqli_query($link, $query);

    header('Location: http://multijeuxphp.projetisi.com/index.php');
    exit;
}

require_once 'view_parts/_page_base.php';
require_once 'view_parts/_header.php';
require_once 'view_parts/_main_menu.php';
?>

<h1><?= ucfirst($site_data[PAGE_ID]); ?></h1>
    <form method="post" action="">
        <ul id="nonestyle">
            <li><label class="inscription" for="nom">Nom :</label>
                <input class="<?php echo $in_post && $nom_ok == false ? 'error' : ''?>" type="text" name="nom" id="nom" value="<?php echo array_key_exists('nom', $_POST) ? $_POST['nom'] : ''; ?>"/>
                <span><?php echo $in_post && $nom_ok == false ? 'Le nom saisi est invalide. Il doit etre d\'au moins 4 caracteres' : ''?></span></li>
            <li><label class="inscription" for="prenom">Prenom :</label>
                <input class="<?php echo $in_post && $prenom_ok == false ? 'error': ''?>" type="text" name="prenom" id="prenom" value="<?php echo array_key_exists('prenom', $_POST) ? $_POST['prenom'] : ''; ?>"/>
                <span><?php echo $in_post && $prenom_ok == false ? 'Le prenom saisi est invalide. Il doit etre d\'au moins 4 caracteres' : ''?></span></li>
            <li><label class="inscription" for="pseudo">Pseudo :</label>
                <input class="<?php echo $in_post && $pseudo_ok == false ? 'error' : ''?>" type="text" name="pseudo" id="pseudo" value="<?php echo array_key_exists('pseudo', $_POST) ? $_POST['pseudo'] : ''; ?>"/>
                <span><?php echo $in_post && $pseudo_ok == false ? 'Le pseudo saisi est invalide. Il doit avoir au moins 2 caracteres.' : ''?></span></li>
            <li><label class="inscription" for="courriel">Courriel :</label>
                <input class="<?php echo $in_post && $courriel_ok == false ? 'error' : ''?>" type="text" name="courriel" id="courriel" value="<?php echo array_key_exists('courriel', $_POST) ? $_POST['courriel'] : ''; ?>"/>
                <span><?php echo $in_post && $courriel_ok == false ? 'Le courriel est invalide.' : ''?></span></li>
            <li><label class="inscription" for="password">Password :</label>
                <input class="<?php echo $in_post && $password_ok == false ? 'error' : ''?>" type="password" name="password" id="password"/>
                <span><?php echo $in_post && $password_ok == false ? 'Le mot de passe est invalide.' : ''?></span></li>
            <li><label class="inscription" for="gender">Sexe :</label>
                <label for="gender">Homme :</label>
                <input type="radio" name="gender" id="gender_male" value="Garcon" <?php echo (array_key_exists('gender', $_POST) && ($_POST['gender'] == 'Garcon')) ? 'checked = "checked"' : ''; ?>"/>
                <label for="gender">Femme :</label>
                <input type="radio" name="gender" id="gender_female" value="Fille" <?php echo (array_key_exists('gender', $_POST) && ($_POST['gender'] == 'Fille')) ? 'checked = "checked"' : '' ; ?>"/>
                <span><?php echo $in_post && $gender_ok == false ? "Veuillez selectionner votre sexe." : ''?></span></li>
            <li><input type="submit" id="submit" name="register" value="Soumettre"/></li>
        </ul>
    </form>
<?php
require_once 'view_parts/_page_bottom.php';
?>