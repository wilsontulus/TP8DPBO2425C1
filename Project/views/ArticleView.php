<div class="container my-4">
    <?php
        if (isset($_GET["action"])) {
            switch ($_GET["action"]) {
                case "add":
                    include_once("ArticleView.add.php");
                    break;

                case "edit":
                    include_once("ArticleView.edit.php");
                    break;

                case "delete":
                    include_once("ArticleView.get.php");
                    break;

                default:
                    include_once("ArticleView.get.php");
            }
        } else { // Management table
            include_once("ArticleView.get.php");
        }
    ?>
</div>