<?php

    if (isset($_POST['publish']) || isset($_POST['simpan']) ) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (isset($_POST['publish'])) {
                $status = 1;
            }else{
                $status = 0;
            }

            $id = $_POST['id'];
            $old_img = $_POST['old_img'];
            $images_new = $_FILES['image_new']['name'];
            $file = $_FILES['image_new']['tmp_name'];
            $category_bio = $_POST['category_bio'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $tgl = date("Y-m-d H:i:s");

            $extension_true = array('jpg', 'jpeg', 'png');
            $a = explode('.', $images_new);
            $extension = strtolower(end($a));
    

            if ($images_new != "") {
                if (in_array($extension, $extension_true) === true) {
                    
                    move_uploaded_file($file, "../../assets/images/biography/".$images_new);

                    if ($old_img != "") {
                        unlink("../../assets/images/biography/".$old_img);
                    }

                    $query = mysqli_query($conn, "UPDATE tbl_biography SET title_bio = '$title', text_bio = '$content', img_bio = '$images_new', tgl_bio = '$tgl', status_bio = '$status', id_category = '$category_bio' WHERE id_bio = '$id'");
        
                }else{

                    echo "<script>alert('Ekstensi gambar tidak sesuai');window.location='?hal=biography_update&id=$_POST[id]'</script>"; 

                }
                
            }else{

                $query = mysqli_query($conn, "UPDATE tbl_biography SET title_bio = '$title', text_bio = '$content', tgl_bio = '$tgl', status_bio = '$status', id_category = '$category_bio' WHERE id_bio = '$id'");

            }

            if(!$query){

                die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));

            }else{

                echo "<script>alert('Data berhasil diubah');window.location='?hal=biography'</script>";

            }
        }
    }



?>