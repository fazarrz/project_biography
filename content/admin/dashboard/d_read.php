<?php

  if(!defined('INDEX')) die('');

?>
<h2 class="dashboard-title">Beranda</h2>
<div class="dashboard-cards">
    <div class="card-single">
        <div class="card-body">
            <span id="one" class="fa fa-user"></span>
            <?php 
            
                $query_admin = mysqli_query($conn, "SELECT * FROM tbl_user_data");
                $jml_admin = mysqli_num_rows($query_admin);
            
            ?>
            <div>
                <h5>Admin</h5>
                <h4><?php echo $jml_admin?></h4>
            </div>
        </div>
    </div>
    <div class="card-single">
        <div class="card-body">
            <span id="two" class="fa fa-folder"></span>
            <?php 
            
                $query_bio = mysqli_query($conn, "SELECT * FROM tbl_biography");
                $jml_bio = mysqli_num_rows($query_bio);
            
            ?>
            <div>
                <h5>Biografi</h5>
                <h4><?php echo $jml_bio?></h4>
            </div>
        </div>
    </div>
    <div class="card-single">
        <div class="card-body">
            <span id="three" class="fa fa-comment"></span>
            <?php 
            
                $query_com = mysqli_query($conn, "SELECT * FROM tbl_biography");
                $jml_com = mysqli_num_rows($query_com);
            
            ?>
            <div>
                <h5>Komentar</h5>
                <h4><?php echo $jml_com?></h4>
            </div>
        </div>
    </div>
</div>
<section class="recent">
    <div class="activity-grid">
        <div class="activity-card">
            <h3>Riwayat Aktifitas</h3>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Admin</th>
                        <th>Biografi</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                    <tbody>
                    <?php 
            
                        $query_data_bio = mysqli_query($conn, "SELECT * FROM tbl_biography JOIN tbl_user_data ON tbl_biography.id_user = tbl_user_data.id_user ORDER BY id_bio DESC LIMIT 5");
                        
                        $no = 0;
                        while($bio = mysqli_fetch_array($query_data_bio)):
                        $no++;
                    ?>
                        <tr>
                            <td><?= $no?></td>
                            <td><?= $bio['name_user']?></td>
                            <td><?= $bio['title_bio']?></td>
                            <td><?= date("d-m-Y",strtotime($bio['tgl_bio']))?></td>
                            <td>
                                <?php
                                    if($bio['status_bio'] == 1){
                                        echo "Publish";
                                    }else{
                                        echo "Draft";
                                    }
                                
                                ?>
                            </td>
                        </tr>
                    <?php endwhile ?>
                    </tbody>
                </thead>
            </table>
        </div>
        <div class="summary">
            <div class="summary-card">
                <div class="summary-single">
                    <span class="fa fa-check-square-o"></span>
                    <?php 
            
                        $query_stat = mysqli_query($conn, "SELECT * FROM tbl_biography WHERE status_bio=1");
                        $jml_stat = mysqli_num_rows($query_stat);
                    
                    ?>
                    <div>
                        <h5><?php echo $jml_stat?></h5>
                        <small>Publish</small>
                    </div>
                </div>
                <div class="summary-single">
                    <span class="fa fa-briefcase"></span>
                    <?php 
            
                        $query_status = mysqli_query($conn, "SELECT * FROM tbl_biography WHERE status_bio=0");
                        $jml_status = mysqli_num_rows($query_status);
                    
                    ?>
                    <div>
                        <h5><?php echo $jml_status?></h5>
                        <small>Draft</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>