<?php

    if(!defined('INDEX')) die("");
?>

<h2 class="dashboard-title">Kategori</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Data Kategori</h3>
            <a href="?hal=category_create"><span class="fa fa-plus"></span></a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            <?php
            
            $query = mysqli_query($conn, "SELECT * FROM tbl_category ORDER BY id_category DESC");
            $no = 0;
            while ($data = mysqli_fetch_array($query)) {
                $no++;
            ?>
            
                <tr>
                    <td><?= $no?></td>
                    <td><img src="../../assets/images/<?= $data['img_category']?>"></td>
                    <td><?= $data['name_category']?></td>
                    <td>
                        <a href="?hal=category_update&id=<?= $data['id_category']?>" class="button-warning"><span class="fa fa-cog"></span></a>
                        <a href="?hal=category_delete&id=<?= $data['id_category']?>&foto=<?= $data['img_category']?>" class="button-delete"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div> 