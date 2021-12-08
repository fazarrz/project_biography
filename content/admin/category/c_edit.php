<?php

    if(!defined('INDEX')) die("");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $id = $_POST['id'];
        $category = $_POST['category'];
        $images_new = $_FILES['image_new']['name'];
        $file = $_FILES['image_new']['tmp_name'];
        $old_image = $_POST['old_image'];

        $extension_true = array('jpg', 'jpeg', 'png');
        $a = explode('.', $images_new);
        $extension = strtolower(end($a));
        
        if ($images_new != "") {
            if (in_array($extension, $extension_true) === true) {

                move_uploaded_file($file, "../../assets/images/category/".$images_new);

                if ($old_image != "") {
                    unlink("../../assets/images/category/".$old_image);
                }

                $query = mysqli_query($conn, "UPDATE tbl_category SET name_category = '$category', img_category = '$images_new' WHERE id_category = '$id'");
            }else{
                
                echo "<script>alert('Ekstensi gambar tidak sesuai');window.location='?hal=category_update&id=$_POST[id]'</script>"; 
            }
        }else{

            $query = mysqli_query($conn, "UPDATE tbl_category SET name_category = '$category' WHERE id_category = '$id'");
        }


        if(!$query){
            die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
        }
        else{
            echo "<script>alert('Data berhasil diubah');window.location='?hal=category'</script>";
        }

    }
    
   
?>