<?php

    if(!defined('INDEX')) die("");

    $category = $_POST['category'];
    $images = $_FILES['image']['name'];

    if ($images != "") {

        $extension_true = array('jpg', 'jpeg', 'png');
        $a = explode('.', $images);
        $extension = strtolower(end($a));
        $file = $_FILES['image']['tmp_name'];

        if (in_array($extension, $extension_true) === true) {
            
            move_uploaded_file($file, "../../assets/images/category/".$images);
            $query = mysqli_query($conn, "INSERT INTO tbl_category (name_category, img_category) VALUES ('$category', '$images')");

            if (!$query) {
                die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
            }
            else{
                echo "<script>alert('Data berhasil ditambahkan');window.location='?hal=category'</script>";
            }

        }
        else{
            echo "<script>alert('Ekstensi gambar tidak sesuai');window.location='?hal=category_create&id=$_POST[id]'</script>"; 
        }

    }

?>