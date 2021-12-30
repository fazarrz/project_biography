<?php

  
    $name = $_POST['name_admin'];
    $username = $_POST['username'];
    $pass = md5($_POST['pass']);

    $query = mysqli_query($conn, "INSERT INTO tbl_user_data (name_user, user_name, pass_user) VALUES ('$name', '$username', '$pass')");

    if (!$query) {
        die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
    }
    else{
        echo "<script>alert('Data berhasil ditambahkan');window.location='?hal=account'</script>";
    }
    


?>