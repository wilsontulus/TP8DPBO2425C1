<?php

$article_id = "";
$article_title = "";
$article_description = "";
$article_doi = "";
$article_creator_id = "";
$article_lecturer_id = "";
$article_creation_date = "";

if (isset($_GET["id"])) {
    foreach ($article_data as $data):
        if ($data["id"] == $_GET["id"]) {
            $article_id = $_GET["id"];
            $article_title = $data["title"];
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

<form action="index.php?page=articles" method="POST">
    <div class="row mb-4">
        <label class="col-md-2">ID:</label>
        <input class="col" type="text" id="article_id" name="article_id" readonly="yes" value="<?= $article_id ?>">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Judul:</label>
        <input class="col" type="text" id="article_title" name="article_title" value="<?= $article_title ?>">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Deskripsi:</label>
        <input class="col" type="text" id="article_description" name="article_description" value="<?= $article_description ?>">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">DOI:</label>
        <input class="col" type="text" id="article_doi" name="article_doi" value="<?= $article_doi ?>">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Penulis:</label>
        <select class="col" name="article_creator_id" id="<?= $article_creator_id ?>">
            <?php foreach ($student_data as $student): ?>
                <option value="<?= $student['id'] ?>" <?php if ($student['id'] == $article_creator_id) { echo "selected"; } ?> ><?= $student['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Dosen Pengampu:</label>

        <select class="col" name="article_lecturer_id" id="<?= $article_lecturer_id ?>">
            <?php foreach ($lecturer_data as $lecturer): ?>
                <option value="<?= $lecturer['id'] ?>" <?php if ($lecturer['id'] == $article_lecturer_id) { echo "selected"; } ?> ><?= $lecturer['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Tanggal pembuatan:</label>
        <input class="col-md-4" type="date" id="article_creation_date" name="article_creation_date"value="<?= $article_creation_date ?>">
    </div>
            
    <button type="submit" class="btn mb-2 mb-md-0 btn-success" name="edit_article">Submit</button>
    <button type="button" onclick="location.href='index.php?page=articles'" class="btn mb-2 mb-md-0 btn-danger" name="">Cancel</button>
</form>