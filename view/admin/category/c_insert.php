<?php

    if(!defined('INDEX')) die("");

    $category = $_POST['category'];
    $images = $_FILES['image']['name'];
    //membuat variable untuk menampung data dari form

    if ($images != "") {

        $extension_true = array('jpg', 'jpeg', 'png');
        //ekstensi yang diperbolehkan
        $a = explode('.', $images);
        //memisahkan nama file dengan ekstensi nya
        $extension = strtolower(end($a));
        $file = $_FILES['image']['tmp_name'];

        if (in_array($extension, $extension_true) === true) {
            
            move_uploaded_file($file, "../../assets/images/".$images);
            //menyimpan file gambar yang ditentukan
            $query = mysqli_query($conn, "INSERT INTO tbl_category (name_category, img_category) VALUES ('$category', '$images')");
            //masukan kedalam database yang ditentukan

            if (!$query) {
                die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
                //jika salah satu data query tidak sesuai maka keluar error ini
            }
            else{
                echo "<script>alert('Data berhasil ditambahkan');window.location='?hal=category'</script>";
                //akan keluar alert/notif jika data berhasil ditambahkan ke database
            }

        }
        else{
            echo "<script>alert('Ekstensi gambar tidak sesuai');window.location='?hal=category_create'</script>";
            //jika ekstensi nya berbeda yang telah ditentukan akan keluar error 
        }

    }

?>