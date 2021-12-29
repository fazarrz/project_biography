<?php
    
        
    if (isset($_GET['id'])) {
        
        $query = mysqli_query($conn, "SELECT * FROM tbl_biography JOIN tbl_category ON tbl_biography.id_category = tbl_category.id_category WHERE status_bio=1 AND id_category = '$_GET[id]' ORDER BY id_bio DESC");
    }else{
        $query = mysqli_query($conn,  "SELECT * FROM tbl_biography  JOIN tbl_category ON tbl_biography.id_category = tbl_category.id_category WHERE status_bio=1");
    }

    $jml_query = mysqli_num_rows($query);
?>





<section class="container">
    <div class="search-biography">
        <div class="bio-searching">
            <h3>Temukan biografi favoritmu..</h3>
            <input type="text" placeholder="Cari biografi...">
        </div>
    </div>
    <div class="biography">
        <div class="title">
            <h2>Biografi Terbaru</h2>
        </div>
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
                        <small><?= $h['name_category']?></small>
                    </div>
                    <div class="button-bio">
                        <a href="?hal=content_bio&id=<?= $h['id_bio']?>">Baca</a>
                    </div>
                </div>
            </div>
            <?php endwhile;?>

            <?php else:
                echo "Tidak ada";
                endif;
            ?>
        </div>
    </div>
</section>