<?php 
    class Database {
        private $host = "109.234.164.219";
        private $database_name = "vlgw1644_actu_esp_db";
        private $username = "vlgw1644_admin_actu_esp";
        private $password = "xHKLE*pSNW5me";
        public $conn;
        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
                echo "Connected";
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }

    $database = new Database();
    $db = $database->getConnection();
?>