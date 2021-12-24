<?php

    $halaman  = array("dashboard", "category", "biography", "content_bio", "insert_comment");

    if(isset($_GET['hal'])) $hal = $_GET['hal'];
    else $hal = "dashboard";

    foreach ($halaman as $value) {
        if ($hal == $value) {
            include "../user/$value.php";
            break;
        }
    }



?>