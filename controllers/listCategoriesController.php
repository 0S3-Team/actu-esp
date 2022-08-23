<?php
    require_once("models/articles.php");
    require_once("models/categories.php");
    require_once("config/database.php");

    $tmp = new Category($db);
    $categories = $tmp->getCategories();
    
    include("views/admin/listCategoryView.php");
    
?>