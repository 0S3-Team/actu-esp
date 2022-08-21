<?php
    if (isset($_GET['list-users'])) {
      $listUser // gnerer par le controleur
      include_once "./admin/listUserView.php";
    } elseif (isset($_GET['list-categories'])) {
      include_once "./admin/listCategoryView.php";
    } elseif (isset($_GET['list-articles'])) {
      include_once "./admin/listArticleView.php";
    } elseif (isset($_GET['blog'])) {
        include_once "./blog/homeView.php";
    }  else {
      include_once "./admin/homeView.php";
    } 
?>