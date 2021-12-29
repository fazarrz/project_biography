<?php

    $query_data = mysqli_query($conn, "SELECT * FROM tbl_category ORDER BY id_category DESC");
    $jumlah  = mysqli_num_rows($query_data);
    
?>


<section class="container">
    <div class="biography">
        <div class="title">
            <h2>Kategori</h2>
        </div>
        <div class="card">
            <?php if ($jumlah > 0) :?>
            <?php while ($h  = mysqli_fetch_array($query_data)) :?>
            <a href="?hal=biography&id=<?= $h['id_category']?>">
                <div class="profile-card">
                    <div class="profile-content">
                        <div class="profile-image">
                            <img src="../../assets/images/category/<?= $h['img_category']?>">
                        </div>
                        <div class="description">
                            <h3><?= $h['name_category']?></h3>
                        </div>
                    </div>
                </div>
            </a>
            <?php endwhile;?>

            <?php else:
                echo "Tidak ada";
                endif;
            ?>
        </div>
    </div>
</section>