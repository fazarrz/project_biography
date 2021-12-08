<?php

    if(!defined('INDEX')) die("");

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM tbl_biography JOIN tbl_category ON tbl_biography.id_category = tbl_category.id_category JOIN tbl_user_data ON tbl_biography.id_user = tbl_user_data.id_user WHERE id_bio = '$id'");
    $data  = mysqli_fetch_array($query);



?>

<h2 class="dashboard-title">Biografi</h2>
<div class="table-cards">
    <div class="table-card">
        <div class="name-crud">
            <h3>Detail Biografi</h3>
            <p>Status: <?php if ($data['status_bio'] == 1) {
                echo "Publish";

            }else{
                echo "Draft";
            }
            
            ?>
            </p>
        </div>
        <div class="content-view">
            <div class="content">
                <div class="title-content">
                    <img src="../../assets/images/biography/<?= $data['img_bio']?>">
                    <h2><?= $data['title_bio']?></h2>
                    <p><?= $data['name_category']?></p>
                </div>
                <div class="content-real">
                    <div class="name-publish">
                        <h5><?= $data['name_user']?></h5>
                        <h6><?= $data['tgl_bio']?></h6>
                    </div>
                    <div class="view">
                        <p>
                            <?php   
                            
                            $content_view = $data['text_bio'];

                            $lengths = strip_tags(html_entity_decode($content_view, ENT_QUOTES, "ISO-889-1"));
            
                            $a =  nl2br($lengths);

                            echo $a;
                            
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>