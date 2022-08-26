<?php
require_once("models/users.php");
require_once("config/database.php");
class AuthController
{
    public $login;
    public $password;
    public $token;
    public $myUser;

    public function __construct($login, $password, $userObjectModel)
    {
        $this->login = $login;
        $this->password = $password;
        $this->myUser = $userObjectModel;
        $this->myUser->login = $login;
    }

    public function isGoodlogin()
    {
        if ($this->myUser->getUserByLogin()) {
            $isGoodPassword = password_verify($this->password, $this->myUser->passwordHash);
            if ($isGoodPassword) {
                return true;
            } else {
                return false;
            }
        }

        return false;
    }

    public function login()
    {
        if ($this->isGoodLogin()) {
            if ($this->myUser->profileId == '1' || $this->myUser->profileId == 2 && $this->myUser->token == "" || $this->myUser->profileId == 2 && $this->isValidToken()) {
                // Création de la session
                return true;
            } else {
                // echo "Votre login ou mot de passe est incorrecte, veuillez ressayer !!!";
                return false;
            }
        }
        return false;
    }

    public function logout()
    {
        session_destroy();
    }

    public function isValidToken()
    {
        if ($this->myUser->token == $this->token) {
            return true;
        }
        return false;
    }
}


if (isset($_POST['login']) && isset($_POST['password'])) {
    $auth = new AuthController($_POST['login'], $_POST['password'], new User($db));
    if ($auth->login()) {
        session_start();
        $_SESSION["id"] = $auth->myUser->id;
        $_SESSION["login"] = $auth->myUser->login;
        $_SESSION["profileId"] = $auth->myUser->profileId;
        $_SESSION["firstname"] = $auth->myUser->firstname;
        $_SESSION["lastname"] = $auth->myUser->lastname;

        header('Location: ./?dashboard');
        exit();
    } else {
        header('Location: ./?login&error');
        exit();
    }
}

$hasError = isset($_GET['error']) ? true : false;
include("views/admin/loginView.php");
