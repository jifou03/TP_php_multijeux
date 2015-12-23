<?php

/*$name = $_POST['nom'];

$link = mysqli_connect("localhost", "root", "") or die("Couldn't connect wtf");

$db_selected = mysqli_select_db($link, 'multijeux') or die ("Couldn't connect AGAIN");

$query = "INSERT INTO users VALUES ('Nickerson')";

mysqli_query($link, $query);

$query = "SELECT * FROM users";

if ($result = mysqli_query($link, $query)) {
    $row = mysqli_fetch_array($result);
    print_r($row);
}*/
$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
$req = $bdd->prepare('INSERT INTO users(username,password,prenom,nom,courriel,sexe')
VALUES ([$_POST(nomutilisateur)],[$_POST(password)],[$_POST(prenom)],[$_POST(nom)],[$_POST(courriel)],[$_POST(sexe)]);
?>

