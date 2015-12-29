<?php

    $nomutilisateur = $_POST['nomutilisateur'];
    $password = sha1($_POST['password']);
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $courriel = $_POST['courriel'];
    $sexe = $_POST['sexe'];

    if ($sexe == 'garcon') {
        $sexe = 'garcon';
    } else if ($sexe == 'fille') {
        $sexe = 'fille';
    }


    $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect");

    mysqli_select_db($link, 'multijeux') or die ("Couldn't connect AGAIN");

    $query = "INSERT INTO users (username, password, prenom, nom, courriel, sexe)
    VALUES ('$nomutilisateur', '$password', '$prenom', '$nom', '$courriel', '$sexe')";

    mysqli_query($link, $query);


header('Location: http://localhost/tp_php_multijeux/index.php');

?>

