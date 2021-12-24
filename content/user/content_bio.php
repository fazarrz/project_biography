<?php

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM tbl_biography JOIN tbl_category ON tbl_biography.id_category = tbl_category.id_category JOIN tbl_user_data ON tbl_biography.id_user = tbl_user_data.id_user WHERE id_bio = '$id'");
    $data  = mysqli_fetch_array($query);

?>




<div class="container">
    <div class="content-bio">
        <div class="content-grid">
            <div class="activity-content">
                <div class="name-content">
                    <h1><?= $data['title_bio']?></h1>
                    <small><?= $data['name_category']?></small>
                </div>
                <div class="image-content-bio">
                    <img src="../../assets/images/biography/<?= $data['img_bio']?>">
                </div>
                <div class="content">
                    <div class="publisher">
                        <h6><?= $data['name_user']?></h6>
                        <p><?= $data['tgl_bio']?></p>
                    </div>
                    <div class="content-point">
                        <p>
                            <?php   
                                    
                                    $content_view = $data['text_bio'];

                                    $lengths = strip_tags(html_entity_decode($content_view, ENT_QUOTES, "ISO-889-1"));
                    
                                    $a =  nl2br($lengths);

                                    echo $a;
                                    
                            ?>
                        </p>
                    </div>
                    <?php
                    
                        $query_comment = mysqli_query($conn, "SELECT * FROM tbl_comment WHERE id_bio = '$id' ORDER BY id_comment DESC");
                        $data_comment = mysqli_num_rows($query_comment);
                    
                    ?>
                    <div class="comment">
                        <div class="header-content">
                            <h4>Komentar</h4>
                        </div>
                        <?php if($data_comment > 0) :?>
                            <?php while($data_komentar = mysqli_fetch_array($query_comment)) :?>
                            <div class="comment-content">
                                <div class="name-comment">
                                    <h4><?= $data_komentar['name_comment']?></h4>
                                    <small><?= $data_komentar['tgl_comment']?></small>
                                </div>
                                <div class="content-comment">
                                    <p><?= $data_komentar['content_comment']?></p>
                                </div>
                            </div>
                            <?php endwhile;?>
                        <?php else : 
                            echo "<br>";
                            echo "Jadilah orang pertama untuk berkomentar";      
                        ?>
                        <?php endif;?>
                    </div>
                    <div class="form-comment">
                        <div class="header-form">
                            <h4>Berikan Komentar Terbaikmu</h4>
                        </div>
                        <form action="?hal=insert_comment" method="post" class="content-form">
                            <input type="hidden" value="<?= $data['id_bio']?>" name="id">
                            <div class="data-comment">
                                <label for="c1">Nama</label>
                                <input type="text" id="c1" name="name_comment" placeholder="Masukan Nama" required>
                            </div>
                            <div class="data-comment">
                                <label for="c2">Email</label>
                                <input type="email" id="c2" name="email_comment" placeholder="Masukan Email" required>
                            </div>
                            <div class="data-comment">
                                <label for="c3">Komentar</label>
                                <textarea name="content_comment" placeholder="Masukan Komentar" id="c3" cols="30" rows="10" required></textarea>
                            </div>
                            <button type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>