<div class="row mb-4 ">
	<div class="col-md-12">
		<h2 class="heading-section">Mahasiswa Baru</h2>
	</div>
</div>

<form action="index.php?page=students" method="POST">
	<div class="row mb-4">
        <label class="col-md-2">Nama:</label>
        <input class="col" type="text" id="student_name" name="student_name">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">NIM:</label>
        <input class="col" type="text" id="student_nim" name="student_nim">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">No. Telepon:</label>
        <input class="col" type="text" id="student_phone" name="student_phone">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Dosen Wali:</label>

        <select class="col" name="student_lecturer_id">
            <option value="0">Pilih Dosen Wali...</option>
            <?php foreach ($lecturer_data as $lecturer): ?>
                <option value="<?= $lecturer['id'] ?>"><?= $lecturer['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Tanggal registrasi:</label>
        <input class="col-md-4" type="date" id="student_join_date" name="student_join_date">
    </div>
            
    <button type="submit" class="btn mb-2 mb-md-0 btn-success" name="add_student">Submit</button>
    <button type="button" onclick="location.href='index.php?page=students'" class="btn mb-2 mb-md-0 btn-danger" name="">Cancel</button>
</form>