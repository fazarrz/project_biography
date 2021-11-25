<?php

    if (isset($_POST['publish']) || isset($_POST['simpan']) ) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (isset($_POST['publish'])) {
                $status = 1;
            }else{
                $status = 0;
            }

            $images_bio = $_FILES['image_bio']['name'];
            $category_bio = $_POST['category_bio'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $tgl = date("Y-m-d H:i:s");
            $user = $_POST['user'];

            if ($images_bio != "") {

                $extension_true = array('jpg', 'jpeg', 'png');
                $a = explode('.', $images_bio);
                $extension = strtolower(end($a));
                $file = $_FILES['image_bio']['tmp_name'];
        
                if (in_array($extension, $extension_true) === true) {
                    
                    move_uploaded_file($file, "../../assets/images/biography/".$images_bio);
                    $query = mysqli_query($conn, "INSERT INTO tbl_biography (title_bio, text_bio, img_bio, tgl_bio, status_bio, id_category, id_user) VALUES ('$title', '$content', '$images_bio', '$tgl', '$status', '$category_bio', '$user')");
        
                    if (!$query) {
                        die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
                    }
                    else{
                        echo "<script>alert('Data berhasil ditambahkan');window.location='?hal=biography'</script>";
                    }
        
                }
                else{
                    echo "<script>alert('Ekstensi gambar tidak sesuai');window.location='?hal=biography_create&id=$_POST[id]'</script>";
                }
            }
        }
    }



?>