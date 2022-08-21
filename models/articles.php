<?php
    class Article{
        // Connection
        private $conn;
        // Table
        private $db_table = "Article";
        // Columns
        public $id;
        public $title;
        public $content;
        public $date;
        public $authorId;
        public $author;
        public $categoryId;
        public $category;
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        public function getAllArticles(){
            $sqlQuery = "SELECT a.id, a.title, a.date, a.author AS authorId, u.id AS author, a.categoryId, c.description AS category FROM " . $this->db_table . " a, Category c, User u WHERE a.author = u.id AND a.categoryId = c.id";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // GET ARTICLES BY AUTHOR ID
        public function getArticlesByAuthor($authorId){
            $sqlQuery = "SELECT a.id, a.title, a.date, a.categoryId, c.description AS category FROM " . $this->db_table . " a, Category c  WHERE a.author = ? AND a.categoryId = c.id";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $authorId);
            $stmt->execute();
            return $stmt;
        }

        // GET ARTICLES BY CATEGORY
        public function getArticlesByCategory($categoryId){
            $sqlQuery = "SELECT a.id, a.title, a.date, a.categoryId, c.description AS category FROM " . $this->db_table . " a, Category c  WHERE a.categoryId = ? AND a.categoryId = c.id";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $categoryId);
            $stmt->execute();
            return $stmt;
        }
        


        // CREATE
        public function createArticle(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        title = :title, 
                        content = :content, 
                        date = :date, 
                        author = :author, 
                        categoryId = :categoryId";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->title=htmlspecialchars(strip_tags($this->title));
            $this->content=htmlspecialchars(strip_tags($this->content));
            $this->date=htmlspecialchars(strip_tags($this->date));
            $this->author=htmlspecialchars(strip_tags($this->author));
            $this->categoryId=htmlspecialchars(strip_tags($this->categoryId));
        
            // bind data
            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":content", $this->content);
            $stmt->bindParam(":date", $this->date);
            $stmt->bindParam(":author", $this->author);
            $stmt->bindParam(":categoryId", $this->categoryId);

            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // READ single
        public function getSingleArticle(){
            
            $sqlQuery = "SELECT 
                        a.id, 
                        a.title, 
                        a.lastname, 
                        a.date, 
                        a.author AS authorId, 
                        u.id AS author, 
                        a.categoryId, 
                        c.description AS category 
                      FROM 
                        ". $this->db_table . " a, Category c, User u 
                        WHERE a.id = ? AND a.author = u.id AND a.categoryId = c.id LIMIT 0,1";
            
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->title = $dataRow['title'];
            $this->content = $dataRow['content'];
            $this->date = $dataRow['date'];
            $this->authorId = $dataRow['authorId'];
            $this->author = $dataRow['author'];
            $this->categoryId = $dataRow['categoryId'];
            $this->category = $dataRow['category'];
        }        
        // UPDATE
        public function updateArticle(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        title = :title, 
                        content = :content, 
                        authorId = :authorId, 
                        categoryId = categoryId, 
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->title=htmlspecialchars(strip_tags($this->title));
            $this->content=htmlspecialchars(strip_tags($this->content));
            $this->authorId=htmlspecialchars(strip_tags($this->authorId));
            $this->categoryId=htmlspecialchars(strip_tags($this->categoryId));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":content", $this->content);
            $stmt->bindParam(":authorId", $this->authorId);
            $stmt->bindParam(":categoryId", $this->categoryId);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteArticle(){
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