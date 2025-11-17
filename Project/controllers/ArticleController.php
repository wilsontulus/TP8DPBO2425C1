<?php

// Get model module
include_once("models/Article.php");

// Declare the class
class ArticleController {
    private $model;
    private $view;
    public function __construct() {
        $this->model = new Article();
        // Get view module
        $this->view = "views/ArticleView.php";
    }

    public function render() {
        include_once($this->view);
    }
}

?>
