<?php
    require_once("models/users.php");
    require_once("config/database.php");

    $user = new User($db);
    if(isset($_POST['firstname']) && isset($_POST['lastname']) 
        	&& isset($_POST['login']) && isset($_POST['password'])){
        
        $user->firstname = $_POST['firstname'];
        $user->lastname = $_POST['lastname'];
        $user->login = $_POST['login'];
        $user->token = isset($_POST['token']) ? '123456789' : '';
        $user->profileId = 2;
        $user->passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        if($user->createUser()){
            header('Location: ./?list-users');
            exit();
        }
    }   
    include("views/admin/addUserView.php");

?>