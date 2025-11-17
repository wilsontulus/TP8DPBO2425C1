<?php

// Declare the class
class HomepageController {
    private $view;
    public function __construct() {
        // Get view module
        $this->view = "views/HomepageView.php";
    }

    public function render() {
        include_once($this->view);
    }
}
?>