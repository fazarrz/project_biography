<?php

    if(!defined('INDEX')) die("");

    $query = mysqli_query($conn, "SELECT * FROM tbl_category WHERE id_category='$_GET[id]'");
    $data = mysqli_fetch_array($query);
?>

<h2 class="dashboard-title">Mengubah Data</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Data Kategori</h3>
        </div>
        <form class="form-type" action="?hal=category_edit" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id_category']?>">
            <div class="input-form">
                <label>Gambar Sebelumnya</label>
                <input type="hidden" name="old_image" value="<?= $data['img_category']?>">
                <img src="../../assets/images/category/<?= $data['img_category']?>">
            </div>
            <div class="input-form">
                <label for="var1">Gambar Baru</label>
                <input class="image-new" type="file" name="image_new" id="var1">
            </div>
            <div class="input-form">
                <label for="var2">Nama Kategori</label>
                <input type="text" name="category" id="var2" required value="<?= $data['name_category']?>">
            </div>
            <button type="submit" class="publish">Simpan</button>
        </form>
    </div>