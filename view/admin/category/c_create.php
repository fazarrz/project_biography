<?php

    if(!defined('INDEX')) die("");
?>

<h2 class="dashboard-title">Masukan Data</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Data Kategori</h3>
        </div>
        <form class="form-type" action="?hal=category_insert" method="post" enctype="multipart/form-data">
            <div class="input-form">
                <label for="var1">Gambar</label>
                <input type="file" name="gambar" id="var1" required>
            </div><br>
            <div class="input-form">
                <label for="var2">Nama Kategori</label>
                <input type="text" name="kategori" id="var2" required>
            </div>
            <button type="submit">Simpan</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</div>