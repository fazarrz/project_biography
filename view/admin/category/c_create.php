<?php

    if(!defined('INDEX')) die("");
?>

<h2 class="dashboard-title">Masukan Data</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Data Kategori</h3>
        </div>
        <form class="form-type" action="#" method="post">
            <div class="input-form">
                <label for="var2">Gambar</label>
                <input type="file" name="#" id="var2" required>
            </div><br>
            <div class="input-form">
                <label for="var1">Nama Kategori</label>
                <input type="text" name="#" id="var1" required>
            </div>
            <button type="submit">Simpan</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</div>