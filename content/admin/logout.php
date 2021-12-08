<?php

    $id = $_SESSION['id_user'];
    $_SESSION['id_user'] = '';
    $_SESSION['name_user'] = '';

    unset($_SESSION['id_user']);
    unset($_SESSION['name_user']);


    session_unset();

    session_destroy();

    header('Location: login.php');

?>