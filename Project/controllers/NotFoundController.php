<?php

// Declare the class
class NotFoundController {
    private $view;
    public function __construct() {
        // Get view module
        $this->view = "views/NotFoundView.php";
    }

    public function render() {
        include_once($this->view);
    }
}
?>