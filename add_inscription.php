<?php

    $name = $_POST['nom'];

    $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect wtf");

    $db_selected = mysqli_select_db($link, 'multijeux') or die ("Couldn't connect AGAIN");

    $query = "INSERT INTO users  VALUES ('Nickerson')";

    mysqli_query($link, $query);

    $query = "SELECT * FROM users";

    if ($result = mysqli_query($link, $query)) {
        $row = mysqli_fetch_array($result);
        print_r($row);
    }
?>


