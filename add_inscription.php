<?php

    $nomutilisateur = $_POST['nomutilisateur'];
    $password = $_POST['password'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $courriel = $_POST['courriel'];
    $sexe = $_POST['sexe'];


    $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect wtf");

    $db_selected = mysqli_select_db($link, 'multijeux') or die ("Couldn't connect AGAIN");

    $query = "INSERT INTO users (username, password, prenom, nom, courriel, sexe)
    VALUES ('$nomutilisateur', '$password', '$prenom', '$nom', '$courriel', '$sexe')";

    mysqli_query($link, $query);


?>


