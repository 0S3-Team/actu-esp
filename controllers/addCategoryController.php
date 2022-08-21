<?php
    require_once("models/categories.php");
    require_once("config/database.php");

    $category = new Category($db);
    if(isset($_POST['description'])){
        
        $category->description = $_POST['description'];
        
        if($category->createCategory()){
            header('Location: /?list-categories');
            exit();
        }
    }   
    include("views/admin/addCategoryView.php");

?>