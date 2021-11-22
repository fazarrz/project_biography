<?php

    if(!defined('INDEX')) die("");
    
    if (isset($_POST['search_bio'])) {
        $search = $_POST['search_bio'];

    }else {
        $search = "";
    }

    $data_search  = mysqli_query($conn, "SELECT * FROM tbl_biography LEFT JOIN tbl_category ON tbl_biography.id_category = tbl_category.id_category WHERE title_bio LIKE '%$search%' OR text_bio LIKE '%$search%'");

    $data_page = 5;
    $data_all  = mysqli_num_rows($data_search);
    $a = ceil($data_all / $data_page);
    
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }else{
        $page = 1;
    }   

    $b = ($page * $data_page) - $data_page;

    $link = 3;
    if ($page > $link) {
        $star_number = $page - $link;
    }
    else{
        $star_number = 1;
    }

    if ($page < ($a - $link)) {
        $end_number = $page - $link;
    }
    else{
        $end_number = $a;
    }

    $data_page_hal = mysqli_query($conn, "SELECT * FROM tbl_biography LEFT JOIN tbl_category ON tbl_biography.id_category = tbl_category.id_category WHERE title_bio LIKE '%$search%' OR text_bio LIKE '%$search%' LIMIT $b,$data_page");


?>



<h2 class="dashboard-title">Biografi</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Data Biografi</h3>
            <a href="?hal=biography_create"><span class="fa fa-plus"></span></a>
        </div>
        <div class="search-table">
            <form action="?hal=biography" method="post">
                <label for="search1">Cari :</label>
                <input type="search" name="search_bio" id="search2" >
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 0 + $b;
                while ($data = mysqli_fetch_array($data_page_hal)) {
                    $no++;
            ?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $data['name_category']?></td>
                    <td><img src="../../assets/images/<?= $data['img_bio']?>"></td>
                    <td><?= $data['title_bio']?></td>   
                    <td><?= date("d-m-Y",strtotime($data['tgl_bio']))?></td>
                    <td>
                        <?php if ($data['status_bio'] == 1) {
                            echo "<b>Publish</b>";
                        }else{
                            echo "<i>Draft</i>";
                        }
                        
                        ?>
                    </td>
                    <td>
                        <a href="?hal=biography_update&id=<?= $data['id_bio']?>" class="button-warning"><span class="fa fa-cog"></span></a>
                        <a href="?hal=biography_delete&id=<?= $data['id_bio']?>&foto=<?= $data['img_bio']?>" class="button-delete"><span class="fa fa-trash"></span></a>
                        <a href="#" class="button-view"><span class="fa fa-eye"></span></a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        <div class="pagination-admin">
            <?php if($page > 1) :?>
                <a href="?hal=biography&page=<?php echo $page - 1?>">
                    &laquo;
                </a>
            <?php endif?>
            <?php for ($i=$star_number; $i <= $end_number; $i++) : ?>

                <?php if($page == $i) :?>
                <a href="?hal=biography&page= <?php echo $i?>" class="active">
                    <?php echo $i?>
                </a>
                <?php else:?>
                <a href="?hal=biography&page= <?php echo $i?>">
                    <?php echo $i?>
                </a>
                <?php endif;?>

            <?php endfor;?>

            <?php if($page < $a) :?>
                <a href="?hal=biography&page=<?php echo $page + 1?>">
                    &raquo;
                </a>
            <?php endif?>
            
        </div>
    </div>
</div>