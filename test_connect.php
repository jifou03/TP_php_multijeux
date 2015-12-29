<?php
    $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect wtf");
    mysqli_select_db($link, 'multijeux') or die ("Couldn't connect AGAIN");
    $username = $_POST['username'];
    $user_password = $_POST['password'];
    echo $username;
    /*$query = "SELECT * FROM users WHERE username='$username'";

   if ($result = mysqli_query($link, $query)) {
            echo '<p>', "Il y a ce nom dans la base de donnée", '</p>';
        } else {
            echo '<p>', "Il n'y a pas ce nom dans la base de donnée", '</p>';
        }*/

    $query = "SELECT * FROM users WHERE username='$username' && password ='$user_password'";
    $result = mysqli_query($link, $query);
    $num_row = mysqli_num_rows($result);

if ($_POST['submit']) {
    if ($num_row == 0){
        header('Location: http://localhost/tp_php_multijeux/connection.php?error=1');
    } else {
       session_start();
       $_SESSION['id'] = $num_row['id'];
       $_SESSION['username'] = $username;
       echo '<p>', "Vous êtes connecté", '</p>';
    }
}
?>
