<?php

    session_start();
    include 'library/config.php';

    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $query = mysqli_query($conn, "SELECT * FROM tbl_user_data WHERE user_name = '$user' AND pass_user = '$pass'");
    $data = mysqli_fetch_array($query);
    $jml = mysqli_num_rows($query);

    if ($jml > 0) {

        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['name_user'] = $data['name_user'];
        $_SESSION['username'] = $data['user_name'];
        $_SESSION['password'] = $data['pass_user'];

        header('location: ../content/admin/index.php');

    }else{
        header('location: ../content/admin/login.php?pesan=error');
        
    }



?>