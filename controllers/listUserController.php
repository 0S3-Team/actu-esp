<?php
    require_once("models/articles.php");
    require_once("models/categories.php");
    require_once("models/users.php");
    require_once("config/database.php");

    $tmp = new User($db);
    $users = $tmp->getUsers();
    $msg = '';
    // Suppression d'un utilisateur
    if(isset($_GET['id'])){
        $tmp->id = $_GET['id'];
        $isDeleted = $tmp->deleteUser();
        if($isDeleted){
            //include("views/admin/listUserView.php");
            header('Location: ./?list-users&deleted=true');
            exit();
        } else {
            header('Location: ./?list-users&deleted=false');
            exit();
        }

    }

    // Message d'erreur
    if(isset($_GET['deleted'])){
        $msg = $_GET['deleted'] ? "L'utilisateur a bien été supprimé" : "L'utilisateur n'existe pas !!!" ;
        $msgClass = $_GET['deleted'] ? "alert-success" : "alert-danger";
    }

    
    include("views/admin/listUserView.php");
    
?>