<?php
    require_once("models/articles.php");
    require_once("models/categories.php");
    require_once("models/users.php");
    require_once("config/database.php");

    $tmp = new User($db);
    $users = $tmp->getUsers();
    
    include("views/admin/listUserView.php");
    
?>