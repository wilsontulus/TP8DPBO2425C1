<?php

$article_id = "";
$article_title = "";
$article_description = "";
$article_doi = "";
$article_creator_id = "";
$article_creator_name = "";
$article_lecturer_id = "";
$article_lecturer_name = "";
$article_creation_date = "";

if (isset($_GET["id"])) {
    foreach ($article_data as $data):
        if ($data["id"] == $_GET["id"]) {
            $article_id = $_GET["id"];
            $article_title = $data["title"];
            $article_description  = $data["description"];
            $article_doi = $data["doi"];
            $article_creator_id = $data["creator_id"];
            $article_creator_name = $data["creator_name"];
            $article_lecturer_id = $data["lecturer_id"];
            $article_lecturer_name = $data["lecturer_name"];
            $article_creation_date = $data["creation_date"];
        }
    endforeach;
}

?>

<div class="row mb-4 ">
	<div class="col-md-12">
		<h2 class="heading-section">Detail Artikel</h2>
	</div>
</div>

<div class="row mb-4">
            <label class="col-md-2">ID:</label>
            <div class="col"><?= $article_id ?></div>
        </div>

        <div class="row mb-4">
            <label class="col-md-2">Judul:</label>
            <div class="col"><?= $article_title ?></div>
        </div>

        <div class="row mb-4">
            <label class="col-md-2">Deskripsi:</label>
            <div class="col"><?= $article_description ?></div>
        </div>

        <div class="row mb-4">
            <label class="col-md-2">DOI:</label>
            <div class="col"><?= $article_doi ?></div>
        </div>

        <div class="row mb-4">
            <label class="col-md-2">Penulis:</label>
            <div class="col"><?= $article_creator_name ?></div>
        </div>

        <div class="row mb-4">
            <label class="col-md-2">Dosen Pengampu:</label>
            <div class="col"><?= $article_lecturer_name ?></div>
        </div>

        <div class="row mb-4">
            <label class="col-md-2">Tanggal Pembuatan:</label>
            <div class="col"><?= $article_creation_date ?></div>
        </div>
            
        <button type="button" onclick="location.href='index.php?page=articles&action=edit&id=<?= $article_id ?>'" class="btn mb-2 mb-md-0 btn-success" name="">Edit</button>
        <button type="button" onclick="location.href='index.php?page=articles'" class="btn mb-2 mb-md-0 btn-primary" name="">Kembali</button>