<?php

    if(!defined('INDEX')) die("");

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM tbl_comment JOIN tbl_biography ON tbl_comment.id_bio = tbl_biography.id_bio WHERE id_comment = '$id'");
    $data  = mysqli_fetch_array($query);



?>

<h2 class="dashboard-title">Komentar</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Detail Komentar</h3>
        </div>
        <div class="content-view">
            <div class="content">
                <div class="title-content">
                    <h2><?= $data['name_comment']?></h2>
                    <p><?= $data['email_comment']?></p>
                </div>
                <div class="content-real">
                    <p>
                        <?php
                        
                        $content_view = $data['content_comment'];

                        $lengths = strip_tags(html_entity_decode($content_view, ENT_QUOTES, "ISO-889-1"));
                        echo $lengths;
                        
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>