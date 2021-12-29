<?php

    $query_data = mysqli_query($conn, "SELECT * FROM tbl_biography JOIN tbl_category ON tbl_biography.id_category = tbl_category.id_category WHERE status_bio = 1 ORDER BY id_bio DESC LIMIT 5");
    $jumlah  = mysqli_num_rows($query_data);
    
?>


<section class="container">
    <div class="main-dashboard">
        <div class="name-dashboard">
            <h1>Selamat Datang Di Biography</h1>
            <p>Disini kamu bisa melihat dan membaca biografi tokoh-tokoh terkenal dari era dahulu ataupun era sekarang.</p>
            <small>Biografi apa yang ingin kamu cari hari ini ?</small>
            <div class="search-dashboard">
                <a href="?hal=biography">Baca Sekarang</a>
            </div>
        </div>
        <div class="image-dashboard">
            <img src="../../assets/images/bio.png">
        </div>
    </div>
    <div class="biography">
        <div class="title">
            <h2>Biografi Terbaru</h2>
        </div>
        <div class="card">
            <?php if ($jumlah > 0) :?>
            <?php while ($h  = mysqli_fetch_array($query_data)) :?>
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
<div class="main-quotes">
    <div class="container">
        <div class="name-quotes">
            <h3>"Setelah beberapa saat, kita baru tahu bahwa privasi adalah hal yang bisa kita jual, tetapi kita tidak bisa membelinya kembali."</h3>
        </div>
    </div>
</div>

<?php

    $query = mysqli_query($conn, "SELECT * FROM tbl_biography JOIN tbl_category ON tbl_biography.id_category = tbl_category.id_category WHERE status_bio = 1 ORDER BY id_bio ASC LIMIT 5");
    $jumlah_query  = mysqli_num_rows($query);
?>
<section class="container">
    <div class="biography">
        <div class="title">
            <h2>Biografi Lama</h2>
        </div>
        <div class="card">
        <?php if ($jumlah_query > 0) :?>
            <?php while ($b  = mysqli_fetch_array($query)) :?>
            <div class="profile-card">
                <div class="profile-content">
                    <div class="profile-image">
                        <img src="../../assets/images/biography/<?= $b['img_bio']?>">
                    </div>
                    <div class="description">
                        <h3><?= $b['title_bio']?></h3>
                        <small><?= $b['name_category']?></small>
                    </div>
                    <div class="button-bio">
                        <a href="?hal=content_bio&id=<?= $b['id_bio']?>">Baca</a>
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