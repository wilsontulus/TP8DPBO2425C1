<?php

$article_id = "";
$article_name = "";
$article_description = "";
$article_doi = "";
$article_creator_id = "";
$article_lecturer_id = "";
$article_creation_date = "";

if (isset($_GET["id"])) {
    foreach ($article_data as $data):
        if ($data["id"] == $_GET["id"]) {
            $article_id = $_GET["id"];
            $article_name = $data["name"];
            $article_description  = $data["description"];
            $article_doi = $data["doi"];
            $article_creator_id = $data["creator_id"];
            $article_lecturer_id = $data["lecturer_id"];
            $article_creation_date = $data["creation_date"];
        }
    endforeach;
}

?>

<div class="row mb-4 ">
	<div class="col-md-12">
		<h2 class="heading-section">Ubah Data Artikel</h2>
	</div>
</div>