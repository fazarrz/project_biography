<?php

    if(!defined('INDEX')) die("");
?>

<h2 class="dashboard-title">Masukan Data</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Data Akun Admin</h3>
        </div>
        <form class="form-type" action="?hal=account_insert" method="post" enctype="multipart/form-data">
            <div class="input-form">
                <label for="var1">Nama Admin </label>
                <input type="text" name="name_admin" id="var1" required>
            </div>
            <div class="input-form">
                <label for="var2">Username</label>
                <input type="text" name="username" id="var2" required>
            </div>
            <div class="input-form">
                <label for="var3">Password</label>
                <input type="text" name="pass" id="var3" required>
            </div>
            <button type="submit" class="publish">Simpan</button>
        </form>
    </div>
</div>