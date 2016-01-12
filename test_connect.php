<?php
    $link = mysqli_connect("localhost", "multijeux", "multijeux") or die("Couldn't connect wtf");
    mysqli_select_db($link, 'p62a15tpinda_multijeuxdb') or die ("Couldn't connect AGAIN");

    $username = $_POST['username'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($link, $query);
    $get_user_info = mysqli_fetch_array($result);
    //var_dump($get_user_info);

    if (array_key_exists('password', $_POST) || array_key_exists('username', $_POST)) {
        if ( ! empty($_POST['password'] || ! empty($_POST['username'])) ){
            if ($_POST['username'] == $get_user_info['username'] AND sha1($_POST['password']) == $get_user_info['password']) {
                session_name("h8278");
                session_start();
                $_SESSION['pseudo'] = $_POST['username'];
                header('Location: http://www.multijeuxphp.projetisi.com/index.php');
            } else {
                header('Location: http://www.multijeuxphp.projetisi.com/connection.php?error=1');
            }
        } else {
            header('Location: http://www.multijeuxphp.projetisi.com/connection.php?error=1');
        }
    } else {
        header('Location: http://www.multijeuxphp.projetisi.com/connection.php?error=1');
    }
?>
