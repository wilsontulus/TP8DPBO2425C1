<?php

// Get database module
include_once("models/Database.php");

// Declare the class, which is inherited from the database module
class Lecturer extends Database {
    // Declare SQL table name for this class
    private $table_name = "lecturers";

    // Get all lecturers from DB table
    public function getAllLecturers() {
        $stmt = $this->executeQuery("SELECT * FROM $this->table_name");

        if (isset($stmt)) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    // Get one lecturer with specified ID from DB table if available
    public function getLecturerFromId($id) {
        $stmt = $this->executeQuery("SELECT * FROM $this->table_name WHERE id = ?", [$id]);

        if (isset($stmt)) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

    // Adder function

    public function addLecturer($name, $nidn, $phone, $join_date) {
        $query = "INSERT INTO $this->table_name (name, nidn, phone, join_date) VALUES (?, ?, ?, ?)";
        
        return $this->executeQuery($query, [$name, $nidn, $phone, $join_date]);
    }

    // Updater function
    public function updateLecturer($id, $name, $nidn, $phone, $join_date) {
        $query = "UPDATE $this->table_name SET name = ?, nidn = ?, phone = ?, join_date = ? WHERE id = ?";
        
        return $this->executeQuery($query, [$name, $nidn, $phone, $join_date, $id]);
    }

    // Deleter function
    public function deleteLecturer($id) {
        return $this->executeQuery("DELETE FROM $this->table_name WHERE id = ?", [$id]);
    }
}

?>