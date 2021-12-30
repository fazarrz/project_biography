<?php

    $id = $_POST['id'];
    $name = $_POST['name_admin'];
    $user = $_POST['username'];

    $query = mysqli_query($conn, "UPDATE tbl_user_data SET name_user = '$name', user_name = '$user' WHERE id_user = '$id'");

    if (!$query) {
        die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
    }
    else{
        echo "<script>alert('Data berhasil ditambahkan');window.location='?hal=account'</script>";
    }
?>