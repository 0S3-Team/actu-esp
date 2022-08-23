<?php
    if (isset($_GET['list-users'])) {
        //$listUser // gnerer par le controleur
        include_once "views/admin/listUserView.php";
    } elseif (isset($_GET['list-categories'])) { // http://localhost/?list-categories
        include_once "views/admin/listCategoryView.php";
    } elseif (isset($_GET['list-articles'])) {
        include_once "controllers/listArticleController.php";
    } elseif (isset($_GET['dashboard'])) {
        include_once "views/admin/homeView.php";
    } elseif (isset($_GET['login'])) {
        include_once "views/admin/loginView.php";
    } elseif (isset($_GET['add-user'])) {
        include_once "controllers/addUserController.php"; // http://localhost/?add-user
    } elseif (isset($_GET['add-category'])) {
        include_once "controllers/addCategoryController.php"; // http://localhost/?add-category
    } elseif (isset($_GET['add-article'])) {
        include_once "controllers/addArticleController.php"; // http://localhost/?add-article
    } else {
        include_once "views/blog/homeView.php";
    } 
?>
