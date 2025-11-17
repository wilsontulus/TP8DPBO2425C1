<?php

$page = "";
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

// Import controller modules
require_once("controllers/HomepageController.php");
require_once("controllers/NotFoundController.php");


require_once("controllers/LecturerController.php");
require_once("controllers/ArticleController.php");
require_once("controllers/StudentController.php");

?>

<!doctype html>
<html lang="id">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="assets/bootstrap@5.3.8.css" rel="stylesheet" crossorigin="anonymous">

  <!-- JQuery, PopperJS, BootstrapJS -->
  <script src="assets/jquery@3.7.1.js" crossorigin="anonymous"></script>
  <script src="assets/popper@2.11.8.js" crossorigin="anonymous"></script>
  <script src="assets/bootstrap@5.3.8.js" crossorigin="anonymous"></script>

  <title>Manajemen Artikel</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="index.php">Manajemen Artikel</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php if (!isset($page) || $page == "") { echo "active"; } ?>" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == "lecturers") { echo "active"; } ?>" href="?page=lecturers">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == "articles") { echo "active"; } ?>" href="?page=articles">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == "students") { echo "active"; } ?>" href="?page=students">Mahasiswa</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- PHP -->
  <?php
    $controller = "";
    
    // Choose the controller according to the page parameter
    switch ($page) {
        case "lecturers":
            $controller = new LecturerController();
            break;
        case "articles":
            $controller = new ArticleController();
            break;
        case "students":
            $controller = new StudentController();
            break;
        case "home":
        case "":
            $controller = new HomepageController();
            break;
        default:
            $controller = new NotFoundController();
    }

    // Render the page if the controller is assigned & available
    if (isset($controller)) {
        $controller->render();
    }
  ?>
</body>

</html>