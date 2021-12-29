<?php

     
    $query = mysqli_query($conn, "SELECT * FROM tbl_biography WHERE status_bio=1 AND id_category = '$_GET[id]' ORDER BY id_bio DESC");
    

    $data_page = 5;
    $data_all  = mysqli_num_rows($query);
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

    $query_data = mysqli_query($conn, "SELECT * FROM tbl_biography WHERE status_bio=1 AND id_category = '$_GET[id]' LIMIT $b,$data_page");
    
    $jml_query = mysqli_num_rows($query_data);

?>




<div class="search-biography">
    <div class="bio-searching">
        <h3><?php echo $_GET['name']?></h3>
    </div>
</div>
<div class="container">
    <div class="biography">
        <div class="card">
            <?php if ($jml_query > 0) :?>
            <?php while ($h  = mysqli_fetch_array($query)) :?>
            <div class="profile-card">
                <div class="profile-content">
                    <div class="profile-image">
                        <img src="../../assets/images/biography/<?= $h['img_bio']?>">
                    </div>
                    <div class="description">
                        <h3><?= $h['title_bio']?></h3>
                    </div>
                    <div class="button-bio">
                        <a href="?hal=content_bio&id=<?= $h['id_bio']?>">Baca</a>
                    </div>
                </div>
            </div>
            <?php endwhile;?>

            <?php else:
                echo "Tidak ada biografi";
                endif;
            ?>
        </div>
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