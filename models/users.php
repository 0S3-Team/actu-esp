<?php
    class User{
        // Connection
        private $conn;
        // Table
        private $db_table = "User";
        // Columns
        public $id;
        public $firstname;
        public $lastname;
        public $login;
        public $token;
        public $profileId;
        public $profile;
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getUsers(){
            $sqlQuery = "SELECT u.id, u.firstname, u.laststname, u.login, u.token, u.profileId, p.description AS profile FROM " . $this->db_table . " u, Profile p WHERE u.profileId = p.id";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createUser(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        firstname = :firstname, 
                        lastname = :lastname, 
                        login = :login, 
                        token = :token, 
                        profileId = :profileId";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->firstname=htmlspecialchars(strip_tags($this->firstname));
            $this->lastname=htmlspecialchars(strip_tags($this->lastname));
            $this->login=htmlspecialchars(strip_tags($this->login));
            $this->token=htmlspecialchars(strip_tags($this->token));
            $this->profileId=htmlspecialchars(strip_tags($this->profileId));
        
            // bind data
            $stmt->bindParam(":firstname", $this->firstname);
            $stmt->bindParam(":lastname", $this->lastname);
            $stmt->bindParam(":login", $this->login);
            $stmt->bindParam(":token", $this->token);
            $stmt->bindParam(":profileId", $this->profileId);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // READ single
        public function getSingleUser(){
            $sqlQuery = "SELECT
                        u.id, 
                        u.firstname, 
                        u.lastname, 
                        u.login, 
                        u.token, 
                        u.profileId, 
                        p.description AS profile
                      FROM
                        ". $this->db_table ." u, Profile p
                    WHERE 
                       u.id = ? AND u.profileId = p.id
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->firstname = $dataRow['firstname'];
            $this->lastname = $dataRow['lastname'];
            $this->login = $dataRow['login'];
            $this->token = $dataRow['token'];
            $this->profileId = $dataRow['profileId'];
            $this->profile = $dataRow['profile'];
        }        
        // UPDATE
        public function updateUser(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        firstname = :firstname, 
                        lastname = :lastname, 
                        login = :login, 
                        token = :token, 
                        profileId = :profileId, 
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->firstname=htmlspecialchars(strip_tags($this->firstname));
            $this->lastname=htmlspecialchars(strip_tags($this->lastname));
            $this->login=htmlspecialchars(strip_tags($this->login));
            $this->token=htmlspecialchars(strip_tags($this->token));
            $this->profileId=htmlspecialchars(strip_tags($this->profileId));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":firstname", $this->firstname);
            $stmt->bindParam(":lastname", $this->lastname);
            $stmt->bindParam(":login", $this->login);
            $stmt->bindParam(":token", $this->token);
            $stmt->bindParam(":profileId", $this->profileId);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteUser(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
?>