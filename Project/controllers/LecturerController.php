<?php

// Get model module
include_once("models/Lecturer.php");

// Declare the class
class LecturerController {
    private $model;
    private $view;
    
    public function __construct() {
        // Declare related models
        $this->model = new Lecturer();

        // Get view module
        $this->view = "views/LecturerView.php";
    }

    public function getActions() {
        // Check for deletion
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "delete" && isset($_GET["id"])) {
                $this->model->deleteLecturer($_GET["id"]);
            }
        }
    }

    public function postActions() {
        // Check for add function
        if (isset($_POST["add_lecturer"])) {
            $this->model->addLecturer($_POST["lecturer_name"], $_POST["lecturer_nidn"],
                          $_POST["lecturer_phone"], $_POST["lecturer_join_date"]);
        } elseif (isset($_POST["edit_lecturer"])) {
            $this->model->updateLecturer($_POST["lecturer_id"], $_POST["lecturer_name"],
                             $_POST["lecturer_nidn"], $_POST["lecturer_phone"],
                             $_POST["lecturer_join_date"]);
        }
    }

    public function render() {
        // Perform POST & GET specific actions before rendering the page
        if (isset($_POST) && sizeof($_POST) > 0) {
            $this->postActions();
        }

        if (isset($_GET) && sizeof($_GET) > 0) {
            $this->getActions();
        }

        // Import the required data

        $lecturer_data = $this->model->getAllLecturers();

        // Render the view page from the view module
        include_once($this->view);
    }
}

?>
