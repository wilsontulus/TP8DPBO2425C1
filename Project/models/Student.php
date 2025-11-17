<?php

// Get database module
include_once("models/Database.php");

// Declare the class, which is inherited from the database module
class Student extends Database {
    // Declare SQL table name for this class
    private $table_name = "students";

    // Get all students from DB table
    public function getAllStudents() {
        $stmt = $this->executeQuery("SELECT * FROM $this->table_name");

        if (isset($stmt)) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    // Get one student with specified ID from DB table if available
    public function getStudentFromId($id) {
        $stmt = $this->executeQuery("SELECT * FROM $this->table_name WHERE id = ?", [$id]);

        if (isset($stmt)) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

    // Adder function

    public function addStudent($name, $nim, $phone, $join_date, $lecturer_id) {
        $query = "INSERT INTO $this->table_name (name, nim, phone, join_date, lecturer_id) VALUES (?, ?, ?, ?, ?)";
        
        return $this->executeQuery($query, [$name, $nim, $phone, $join_date, $lecturer_id]);
    }

    // Updater function
    public function updateStudent($id, $name, $nim, $phone, $join_date, $lecturer_id) {
        $query = "UPDATE $this->table_name SET name = ?, nim = ?, phone = ?, join_date = ?, lecturer_id = ? WHERE id = ?";
        
        return $this->executeQuery($query, [$name, $nim, $phone, $join_date, $lecturer_id, $id]);
    }

    // Deleter function
    public function deleteStudent($id) {
        return $this->executeQuery("DELETE FROM $this->table_name WHERE id = ?", [$id]);
    }
    
}

?>