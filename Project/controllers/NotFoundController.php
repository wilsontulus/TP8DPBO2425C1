<?php

// Declare the class
class NotFoundController {
    private $view;
    public function __construct() {
        // Get view module
        $this->view = "views/NotFoundView.php";
    }

    public function render() {
        // Render the view page from the view module
        include_once($this->view);
    }
}
?>