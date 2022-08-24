<?php
    require_once("models/articles.php");
    require_once("models/categories.php");
    require_once("models/users.php");
    require_once("config/database.php");

    $tmp = new User($db);
    if(isset($_GET['id'])){
        $tmp->id= $_GET['id'];
        $isDeleted = $tmp->deleteUser();
        if($isDeleted){
            //include("views/admin/listUserView.php");
            header('Location: ./?list-users&deleted=true&id=2');
            exit();
        } else {
            header('Location: ./?list-users&deleted=false');
            exit();
        }

    }

    
    
?>