<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'inscription'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
    <link rel="stylesheet" type="text/css" href="css/site_style.css"/>
</head>
<body>
<h1>$Title$</h1>
<form action="add_inscription.php" method="post">
<ul>
    <li><label class="inscription" for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"/></li>
    <li><label class="inscription" for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom"/></li>
    <li><label class="inscription" for="nomutilisateur">Nom d'utilisateur :</label>
        <input type="text" name="nomutilisateur" id="nomutilisateur"/></li>
    <li><label class="inscription" for="password">Password :</label>
        <input type="password" name="password" id="password"/></li>
    <li><label class="inscription" for="courriel">Courriel :</label>
        <input type="text" name="courriel" id="courriel"/></li>
    <li><label for="sexe">Sexe :</label>
        <label for="garcon">Garçon :</label>
        <input type="radio" name="sexe" id="garcon"/>
        <label for="fille">Fille :</label>
        <input type="radio" name="sexe" id="fille"/></li>
    <input type="submit" id="submit" name="submit" value="Soumettre"/>
</ul>
</form>
</body>
</html>