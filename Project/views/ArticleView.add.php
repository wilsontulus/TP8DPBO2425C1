<div class="row mb-4 ">
	<div class="col-md-12">
		<h2 class="heading-section">Artikel Baru</h2>
	</div>
</div>

<form action="index.php?page=articles" method="POST">
    <div class="row mb-4">
        <label class="col-md-2">Judul:</label>
        <input class="col" type="text" id="article_title" name="article_title">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Deskripsi:</label>
        <input class="col" type="text" id="article_description" name="article_description">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">DOI:</label>
        <input class="col" type="text" id="article_doi" name="article_doi">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Penulis:</label>
        <select class="col" name="article_creator_id">
            <option value="0">Pilih Penulis...</option>
            <?php foreach ($student_data as $student): ?>
                <option value="<?= $student['id'] ?>"><?= $student['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Dosen Pengampu:</label>

        <select class="col" name="article_lecturer_id">
            <option value="0">Pilih Dosen Pengampu...</option>
            <?php foreach ($lecturer_data as $lecturer): ?>
                <option value="<?= $lecturer['id'] ?>"><?= $lecturer['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Tanggal pembuatan:</label>
        <input class="col-md-4" type="date" id="article_creation_date" name="article_creation_date">
    </div>
            
    <button type="submit" class="btn mb-2 mb-md-0 btn-success" name="add_article">Submit</button>
    <button type="button" onclick="location.href='index.php?page=articles'" class="btn mb-2 mb-md-0 btn-danger" name="">Cancel</button>
</form>