<?php

    if(!defined('INDEX')) die("");

    if (isset($_POST['search_account'])) {
        $search = $_POST['search_account'];

    }else {
        $search = "";
    }

    $data_search  = mysqli_query($conn, "SELECT * FROM tbl_user_data WHERE name_user LIKE '%$search%'");

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

    $data_page_hal = mysqli_query($conn, "SELECT * FROM tbl_user_data WHERE name_user LIKE '%$search%' LIMIT $b,$data_page");
?>

<h2 class="dashboard-title">Akun Admin</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Data Admin</h3>
            <a href="?hal=account_create"><span class="fa fa-plus"></span></a>
        </div>
        <div class="search-table">
            <form action="?hal=category" method="post">
                <label for="search1">Cari :</label>
                <input type="search" name="search_account" id="search2" >
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
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
                    <td><?= $no?></td>
                    <td><?= $data['name_user']?></td>
                    <td><?= $data['user_name']?></td>
                    <td>
                        <a href="?hal=account_update&id=<?= $data['id_user']?>" class="button-warning"><span class="fa fa-cog"></span></a>
                        <a href="?hal=account_delete&id=<?= $data['id_user']?>" class="button-delete"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        <div class="pagination-admin">
            <?php if($page > 1) :?>
                <a href="?hal=account&page=<?php echo $page - 1?>">
                    &laquo;
                </a>
            <?php endif?>
            <?php for ($i=$star_number; $i <= $end_number; $i++) : ?>

                <?php if($page == $i) :?>
                <a href="?hal=account&page= <?php echo $i?>" class="active">
                    <?php echo $i?>
                </a>
                <?php else:?>
                <a href="?hal=account&page= <?php echo $i?>">
                    <?php echo $i?>
                </a>
                <?php endif;?>

            <?php endfor;?>

            <?php if($page < $a) :?>
                <a href="?hal=account&page=<?php echo $page + 1?>">
                    &raquo;
                </a>
            <?php endif?>
            
        </div>
    </div>
</div> 