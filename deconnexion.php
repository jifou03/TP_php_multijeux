<?php
    session_name("h8278");
    session_start();
    unset($_SESSION['pseudo']);
    header('Location: http://localhost/tp_php_multijeux/index.php');
?>

