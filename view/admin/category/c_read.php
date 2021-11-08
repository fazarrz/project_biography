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
                <tr>
                    <td>1</td>
                    <td><img src="../../assets/image/mardira.jpg"></td>
                    <td>Matematika</td>
                    <td>
                        <a href="?hal=category_update" class="button-warning"><span class="fa fa-cog"></span></a>
                        <a href="#" class="button-delete"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div> 