<div class="container my-4">
    <?php
        if (isset($_GET["action"])) {
            switch ($_GET["action"]) {
                case "add":
                    include_once("StudentView.add.php");
                    break;

                case "edit":
                    include_once("StudentView.edit.php");
                    break;

                case "delete":
                    include_once("StudentView.get.php");
                    break;

                default:
                    include_once("StudentView.get.php");
            }
        } else { // Management table
            include_once("StudentView.get.php");
        }
    ?>
</div>