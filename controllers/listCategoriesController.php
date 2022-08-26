<?php
    require_once("models/articles.php");
    require_once("models/categories.php");
    require_once("config/database.php");

    $tmp = new Category($db);
    $categories = $tmp->getCategories();
    $msg = '';
    // Suppression categorie
    if(isset($_GET['id'])){
        $tmp->id = $_GET['id'];
        $isDeleted = $tmp->deleteCategory();
        if($isDeleted){

            header('Location: ./?list-categories&deleted=true');
            exit();
        } else {
            header('Location: ./?list-categories&deleted=false');
            exit();
        }

    }

    // Message d'erreur
    if(isset($_GET['deleted'])){
        $msg = $_GET['deleted'] ? "La categorie a bien été supprimé" : "La categorie n'existe pas !!!" ;
        $msgClass = $_GET['deleted'] ? "alert-success" : "alert-danger";
    }
    //Modifier Categorie
    if(isset($_GET['id'])){
        $tmp->id = $_GET['id'];
        $isUpdate = $tmp->updateCategory();

        // if($isUpdate){

        //     header('Location: ./?list-categories&update=true');
        //     exit();
        // } else {
        //     header('Location: ./?list-categories&update=false');
        //     exit();
        // }
    }
      // Message d'erreur
    //   if(isset($_GET['update'])){
    //     $msg = $_GET['update'] ? "La categorie a bien été modifié" : "La categorie non modifié !!!" ;
    //     $msgClass = $_GET['update'] ? "alert-success" : "alert-danger";
    // }
    
    include("views/admin/listCategoryView.php");
    
?>