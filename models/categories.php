<?php
    class Category{
        // Connection
        private $conn;
        // Table
        private $db_table = "category";
        // Columns
        public $id;
        public $description;
    
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getCategorys(){
            $sqlQuery = "SELECT id, description " . $this->db_table . " ";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createCategory(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        description = :description ";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->description=htmlspecialchars(strip_tags($this->description));
           
            // bind data
            $stmt->bindParam(":description", $this->description);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // READ single
        public function getSingleCategory(){
            $sqlQuery = "SELECT
                        id, 
                        description, 
                      FROM
                        ". $this->db_table ." 
                    WHERE 
                       id = ? 
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->description = $dataRow['description'];
            
        }        
        // UPDATE
        public function updateCategory(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        description = :description, 
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->description=htmlspecialchars(strip_tags($this->description));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":description", $this->description);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteCategory(){
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