<?php

    $query_data = mysqli_query($conn, "SELECT * FROM tbl_biography WHERE status_bio = 1 ORDER BY id_bio DESC");
    $jumlah  = mysqli_num_rows($query_data);
    
?>

<?php if ($jumlah > 0): ?>
        
    <?php while ($h  = mysqli_fetch_array($query_data)) :?>
        <h1><?= $h['title_bio']?></h1>
        <p><?= $h['text_bio']?></p>

    <?php endwhile;?>


<?php else:
    echo "Tidak ada";
    endif;
?>
