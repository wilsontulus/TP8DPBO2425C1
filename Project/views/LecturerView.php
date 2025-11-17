<div class="container my-4">
    <?php
        if (isset($_GET["action"])) {
            switch ($_GET["action"]) {
                case "add":
                    include_once("LecturerView.add.php");
                    break;

                case "edit":
                    include_once("LecturerView.edit.php");
                    break;

                case "delete":
                    include_once("LecturerView.get.php");
                    break;

                default:
                    include_once("LecturerView.get.php");
            }
        } else { // Management table
            include_once("LecturerView.get.php");
        }
    ?>
</div>