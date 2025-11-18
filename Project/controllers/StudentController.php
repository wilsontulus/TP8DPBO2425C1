<?php

// Get model module
include_once("models/Lecturer.php");
include_once("models/Student.php");

// Declare the class
class StudentController {
    private $lecturer_model;
    private $student_model;
    private $view;
    
    public function __construct() {
        // Declare related models
        $this->lecturer_model = new Lecturer();
        $this->student_model = new Student();

        // Get view module
        $this->view = "views/StudentView.php";
    }

    

    public function getActions() {
        // Check for deletion
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "delete" && isset($_GET["id"])) {
                $this->student_model->deleteStudent($_GET["id"]);
            }
        }
    }

    public function postActions() {
        // Check for add function
        if (isset($_POST["add_student"])) {
            $this->student_model->addStudent($_POST["student_name"], $_POST["student_nim"],
                          $_POST["student_phone"], $_POST["student_join_date"], $_POST["student_lecturer_id"]);
        } elseif (isset($_POST["edit_student"])) {
            $this->student_model->updateStudent($_POST["student_id"], $_POST["student_name"],
                             $_POST["student_nim"], $_POST["student_phone"],
                             $_POST["student_join_date"], $_POST["student_lecturer_id"]);
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

        $lecturer_data = $this->lecturer_model->getAllLecturers();
        $student_data = $this->student_model->getAllStudents();

        // Render the view page from the view module
        include_once($this->view);
    }
}

?>
