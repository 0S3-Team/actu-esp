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
               } else if( $this->myUser->profileId == 2 && $this->myUser->token == "" ) {
                   // Création de la session et redirection vers la vue éditeur simple
               } else {
                    if($this->isValidToken()) {
                        // Création de la session et redirection vers la vue éditeur avec droit gestion des users
                    } else {
                        // Message erreur sur la zone token du formulaire
                    }
               }
            }
        }

        public function logout() {
            // destruction de la session;
        }

        public function isValidToken() {
            if($this->myUser->token == $this->token){
                return true;
            }
            return false;
        }


    }


?>
