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
            case 'category_insert':
                include 'category/c_insert.php';
                break;  
            case 'category_update':
                include 'category/c_update.php';
                break;
            case 'category_delete':
                include 'category/c_delete.php';
                break;
            case 'category_edit':
                include 'category/c_edit.php';
                break;
            case 'biography':
                include 'biography/b_read.php';
                break;
            case 'biography_create':
                include 'biography/b_create.php';
                break;
            case 'biography_insert':
                include 'biography/b_insert.php';
                break;
            case 'biography_update':
                include 'biography/b_update.php';
                break;
            case 'biography_edit':
                include 'biography/b_edit.php';
                break;
            default:
                header('Location:index.php');
        }
   }else{
        include 'dashboard/d_read.php';
   }
?>