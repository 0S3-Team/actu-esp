<?php
    if (isset($_GET['list-users'])) {
        //$listUser // gnerer par le controleur
        include_once "views/admin/listUserView.php";
    } elseif (isset($_GET['list-categories'])) {
        include_once "views/admin/listCategoryView.php";
    } elseif (isset($_GET['list-articles'])) {
        include_once "views/admin/listArticleView.php";
    } elseif (isset($_GET['dashboard'])) {
        include_once "views/admin/homeView.php";
    } elseif (isset($_GET['login'])) {
        include_once "views/admin/loginView.php";
    } elseif (isset($_GET['add-user'])) {
        include_once "controllers/userController.php";
    } else {
        include_once "views/blog/homeView.php";

    } 
?>