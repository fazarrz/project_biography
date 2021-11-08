<?php

   if(!defined('INDEX')) die("");

   if(isset($_GET['hal'])) {
       $hal = $_GET['hal'];
       switch ($hal) {
            case 'dashboard':
               include 'dashboard/d_read.php';
               break;
            case 'category':
                include 'category/c_read.php';
                break;
            case 'category_create':
                include 'category/c_create.php';
                break;
            case 'category_update':
                include 'category/c_update.php';
                break;             
           default:
               echo "";
               break;
       }
   }else{
        include 'dashboard/d_read.php';
   }
?>