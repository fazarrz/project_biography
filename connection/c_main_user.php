<?php

    $halaman  = array("dashboard", "category", "biography_category", "biography", "content_bio", "contact", "insert_comment");

    if(isset($_GET['hal'])) $hal = $_GET['hal'];
    else $hal = "dashboard";

    foreach ($halaman as $value) {
        if ($hal == $value) {
            include "../user/$value.php";
            break;
        }
    }



?>