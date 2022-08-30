<?php
require_once("models/categories.php");
require_once("config/database.php");

if (!$_SESSION) {
    header('Location: ./?login');
    exit();
} else {

    $category = new Category($db);
    if (isset($_POST['description'])) {

        $category->description = $_POST['description'];

        if ($category->createCategory()) {
            header('Location: ./?list-categories');
            exit();
        }
    }
    include("views/admin/addCategoryView.php");
}
