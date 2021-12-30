<?php

    if(!defined('INDEX')) die("");

    $query = mysqli_query($conn, "SELECT * FROM tbl_user_data WHERE id_user = '$_GET[id]'");
    $data_admin = mysqli_fetch_array($query);

?>

<h2 class="dashboard-title">Masukan Data</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Data Akun Admin</h3>
        </div>
        <form class="form-type" action="?hal=account_edit" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $data_admin['id_user']?>">
            <div class="input-form">
                <label for="var1">Nama Admin </label>
                <input type="text" name="name_admin" id="var1" value="<?php echo $data_admin['name_user']?>" required>
            </div>
            <div class="input-form">
                <label for="var2">Username</label>
                <input type="text" name="username" id="var2" value="<?php echo $data_admin['user_name']?>" required>
            </div>
            <button type="submit" class="publish">Simpan</button>
        </form>
    </div>
</div>