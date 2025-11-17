<?php

// Get model module
include_once("models/Article.php");
include_once("models/Lecturer.php");
include_once("models/Student.php");

// Declare the class
class ArticleController {
    private $article_model;
    private $lecturer_model;
    private $student_model;
    private $view;

    public function __construct() {
        $this->article_model = new Article();
        $this->lecturer_model = new Lecturer();
        $this->student_model = new Student();

        // Get view module
        $this->view = "views/ArticleView.php";
    }

    

    public function getActions() {
        // Check for deletion
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "delete" && isset($_GET["id"])) {
                $this->article_model->deleteArticle($_GET["id"]);
            }
        }
    }

    public function postActions() {
        // Check for add function
        if (isset($_POST["add_article"])) {
            $this->article_model->addArticle($_POST["article_title"], $_POST["article_description"],
                          $_POST["article_doi"], $_POST["article_creator_id"], $_POST["article_lecturer_id"],
                        $_POST["article_creation_date"]);
        } elseif (isset($_POST["edit_article"])) {
            $this->article_model->updateArticle($_POST["article_id"], $_POST["article_title"], $_POST["article_description"],
                          $_POST["article_doi"], $_POST["article_creator_id"], $_POST["article_lecturer_id"],
                        $_POST["article_creation_date"]);
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

        // Import all data and render the page

        $article_data = $this->article_model->getAllArticles();
        $lecturer_data = $this->lecturer_model->getAllLecturers();
        $student_data = $this->student_model->getAllStudents();

        include_once($this->view);
    }
}

?>
