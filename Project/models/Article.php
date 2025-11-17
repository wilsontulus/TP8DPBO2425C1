<?php

// Get database module
include_once("models/Database.php");

// Declare the class, which is inherited from the database module
class Article extends Database {
    // Declare SQL table name for this class
    private $table_name = "articles";
    
    // Get all articles from DB table
    public function getAllArticles() {
        $stmt = $this->executeQuery("SELECT * FROM $this->table_name");

        if (isset($stmt)) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    // Get one article with specified ID from DB table if available
    public function getArticleFromId($id) {
        $stmt = $this->executeQuery("SELECT * FROM $this->table_name WHERE id = ?", [$id]);

        if (isset($stmt)) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

    // Adder function
    public function addArticle($name, $description, $doi, $creator_id, $lecturer_id, $creation_date) {
        $query = "INSERT INTO $this->table_name (name, description, doi, creator_id, lecturer_id, creation_date) VALUES (?, ?, ?, ?, ?, ?)";
        
        return $this->executeQuery($query, [$name, $description, $doi, $creator_id, $lecturer_id, $creation_date]);
    }

    // Updater function
    public function updateArticle($id, $name, $description, $doi, $creator_id, $lecturer_id, $creation_date) {
        $query = "UPDATE $this->table_name SET name = ?, description = ?, doi = ?, creator_id = ?, lecturer_id = ?, creation_date = ? WHERE id = ?";
        
        return $this->executeQuery($query, [$name, $description, $doi, $creator_id, $lecturer_id, $creation_date, $id]);
    }

    // Deleter function
    public function deleteArticle($id) {
        return $this->executeQuery("DELETE FROM $this->table_name WHERE id = ?", [$id]);
    }
}

?>