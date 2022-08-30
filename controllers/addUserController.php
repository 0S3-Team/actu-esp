<?php
require_once("models/users.php");
require_once("config/database.php");

function generateToken()
{
    $token = openssl_random_pseudo_bytes(16);
    //Convert the binary data into hexadecimal representation.
    $token = bin2hex($token);
    //Print it out for example purposes.
    return $token;
}


$user = new User($db);
if (
    isset($_POST['firstname']) && isset($_POST['lastname'])
    && isset($_POST['login']) && isset($_POST['password'])
) {

    $user->firstname = $_POST['firstname'];
    $user->lastname = $_POST['lastname'];
    $user->login = $_POST['login'];
    $user->token = isset($_POST['token']) ? generateToken() : '';
    $user->profileId = 2; // Id Editeur
    $user->passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if ($user->createUser()) {
        header('Location: ./?list-users');
        exit();
    }
}
include("views/admin/addUserView.php");

if (!$_SESSION) {
    header('Location: ./?login');
    exit();
}
