<?php

  
        
        $id = $_POST['id'];
        $name = $_POST['name_comment'];
        $email = $_POST['email_comment'];
        $content = $_POST['content_comment'];
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y-m-d H:i:s");

        $query = mysqli_query($conn, "INSERT INTO tbl_comment (id_bio, name_comment, email_comment, tgl_comment, content_comment) VALUES ('$id', '$name', '$email', '$tgl', '$content') ");

        if (!$query) {
            die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
        }
        else{
            echo "<script>alert('Data berhasil ditambahkan');window.location='?hal=content_bio&id=$_POST[id]'</script>";
        }
    


?>