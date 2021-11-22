<?php

    if(!defined('INDEX')) die("");

    $query_category = mysqli_query($conn, "SELECT * FROM tbl_category");
    $query_bio = mysqli_query($conn, "SELECT * FROM tbl_biography WHERE id_bio = '$_GET[id]'");
    $data  = mysqli_fetch_array($query_bio);
?>

<h2 class="dashboard-title">Masukan Data</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Data Biografi</h3>
        </div>
        <form class="form-type" action="?hal=biography_edit" method="post" enctype="multipart/form-data">
            <div class="input-form">
                <input type="hidden" name="id" value="<?= $data['id_bio']?>">
                <label for="var1">Gambar</label>
                <input type="file" name="image_bio" id="var1" required>
                <img src="../../assets/images/<?= $data['img_bio']?>">
            </div>
            <div class="input-form">
                <label for="var2">Kategori</label>
                <select name="category_bio" id="var2">
                    <option>Pilih Kategori</option>
                    <?php
                        while($c = mysqli_fetch_array($query_category)){
                            echo "<option value='$c[id_category]'";
                            if ($c['id_category'] == $data['id_category']){
                                echo "selected";
                            }
                                echo ">$c[name_category]</option>"; 
                        }
                    ?>
                </select>
            </div>
            <div class="input-form">
                <label for="var3">Judul</label>
                <input type="text" value="<?= $data['title_bio']?>" name="title" id="var3" required>
            </div>
            <div class="input-form">
                <label for="var4">Isi</label>
                <textarea name="content" id="var4" cols="30" rows="15"><?php echo $data['text_bio']?></textarea>
            </div>
            <button type="submit" name="publish" class="publish">Publish</button>
            <button type="submit" name="simpan" class="simpan">Simpan Sebagai Draft</button>
        </form>
    </div>
</div>