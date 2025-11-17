<?php

// Get model module
include_once("models/Lecturer.php");

// Declare the class
class LecturerController {
    private $model;
    private $view;
    
    public function __construct() {
        $this->model = new Lecturer();
        // Get view module
        $this->view = "views/LecturerView.php";
    }

    public function render() {
        $data = $this->model->getAllLecturers();
        include_once($this->view);
    }
}

?>
