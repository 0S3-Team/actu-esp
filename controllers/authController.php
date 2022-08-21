<?php
    require_once("../models/users.php");
    require_once("../config/database.php");
    
    class AuthController{
        public $login;
        public $password;
        public $token;
        public $myUser; 

        public function __construct($login, $password){
            $this->login = $login;
            $this->password = $password;
            $this->myUser = new User($db);
            $this->myUser->login = $login;
        }
    
        public function isGoodlogin() {
            if($this->myUser->getUserByLogin()){
                $isGoodPassword = password_verify($this->password,$this->myUser->passwordHash);
                if($isGoodPassword){
                    return true;
                } else {
                    return false;
                }
            }

            return false;  
        }

        public function login() {
            if($this->isGoodLogin()) {
               if($this->myUser->profileId == 1) {
                   // Création de la session et redirection vers le DashBoard Admin
                   session_start();
                   $_SESSION['id'] = $this->myUser->id;
                   $_SESSION['login'] = $this->myUser->login;
                   $_SESSION['profileId'] = $this->myUser->profileId;
                   $_SESSION['firstname'] = $this->myUser->firstname;
                   $_SESSION['lastname'] = $this->myUser->lastname;
                   header('location: http://www.google.com');
                   exit();  
               } else if( $this->myUser->profileId == 2 && $this->myUser->token == "" ) {
                   // Création de la session et redirection vers la vue éditeur simple
                    session_start();
                    $_SESSION['id'] = $this->myUser->id;
                    $_SESSION['login'] = $this->myUser->login;
                    $_SESSION['profileId'] = $this->myUser->profileId;
                    $_SESSION['firstname'] = $this->myUser->firstname;
                    $_SESSION['lastname'] = $this->myUser->lastname;
                    header('Location: dashbord.php');
                    exit();
               } else {
                    if($this->isValidToken()) {
                        // Création de la session et redirection vers la vue éditeur avec droit gestion des users
                        session_start();
                        $_SESSION['id'] = $this->myUser->id;
                        $_SESSION['login'] = $this->myUser->login;
                        $_SESSION['profileId'] = $this->myUser->profileId;
                        $_SESSION['firstname'] = $this->myUser->firstname;
                        $_SESSION['lastname'] = $this->myUser->lastname;
                        header('Location: dashbordEditeur.php');
                        exit();
                    } else {
                        echo "Votre login ou mot de passe est incorrecte, veuillez ressayer !!!";
                    }
               }
            }
        }

        public function logout() {
            session_destroy();
        }

        public function isValidToken() {
            if($this->myUser->token == $this->token){
                return true;
            }
            return false;
        }


    }


?>
