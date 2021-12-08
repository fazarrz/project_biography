<?php

    $query_data = mysqli_query($conn, "SELECT * FROM tbl_category ORDER BY id_category DESC");
    $jumlah  = mysqli_num_rows($query_data);
    
?>

<?php if ($jumlah > 0): ?>
        
    <?php while ($h  = mysqli_fetch_array($query_data)) :?>
        <h1><?= $h['name_category']?></h1>

    <?php endwhile;?>


<?php else:
    echo "Tidak ada";
    endif;
?>
