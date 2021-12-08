<?php

    if(!defined('INDEX')) die("");

    $query_category = mysqli_query($conn, "SELECT * FROM tbl_category");
    
?>

<h2 class="dashboard-title">Masukan Data</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Data Kategori</h3>
        </div>
        <form class="form-type" action="?hal=biography_insert" method="post" enctype="multipart/form-data">
            <div class="input-form">
                <label for="var1">Gambar</label>
                <input type="file" name="image_bio" id="var1" required>
                <input type="hidden" name="user" value="<?php echo $_SESSION['id_user']?>">
            </div>
            <div class="input-form">
                <label for="var2">Kategori</label>
                <select name="category_bio" id="var2">
                    <option>Pilih Kategori</option>
                    <?php
                        while($c = mysqli_fetch_array($query_category)){
                            echo "<option value='$c[id_category]'>$c[name_category]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="input-form">
                <label for="var3">Judul</label>
                <input type="text" name="title" id="var3" required>
            </div>
            <div class="input-form">
                <label for="var4">Isi</label>
                <textarea name="content" id="var4" cols="30" rows="15" tabindex="1" onkeypress="paragraphs(event)"></textarea>
            </div>
            <script>
                function paragraphs(event) {
                    if (event.keyCode == 13 && event.shiftKey) {
                        document.getElementById("text").innerHTML = "enter+shift";
                    }

                    if (event.keyCode == 13 && !event.shiftKey) {
                        document.getElementById("text").innerHTML = "enter";
                    }
                }
            </script>
            <p id="text"></p>
            <button type="submit" name="publish" class="publish">Publish</button>
            <button type="submit" name="simpan" class="simpan">Simpan Sebagai Draft</button>
        </form>
    </div>
</div>