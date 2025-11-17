<?php

// Get model module
include_once("models/Student.php");

// Declare the class
class StudentController {
    private $model;
    private $view;
    public function __construct() {
        $this->model = new Student();
        // Get view module
        $this->view = "views/StudentView.php";
    }

    public function render() {
        include_once($this->view);
    }
}

?>
