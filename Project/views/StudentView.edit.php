<?php

$student_id = "";
$student_name = "";
$student_nim = "";
$student_phone = "";
$student_lecturer_id = "";
$student_join_date = "";

if (isset($_GET["id"])) {
    foreach ($student_data as $data):
        if ($data["id"] == $_GET["id"]) {
            $student_id = $_GET["id"];
            $student_name = $data["name"];
            $student_nim  = $data["nim"];
            $student_phone = $data["phone"];
            $student_lecturer_id = $data["lecturer_id"];
            $student_join_date = $data["join_date"];
        }
    endforeach;
}

?>

<div class="row mb-4 ">
	<div class="col-md-12">
		<h2 class="heading-section">Ubah Data Mahasiswa</h2>
	</div>
</div>

<form action="index.php?page=students" method="POST">
    <div class="row mb-4">
        <label class="col-md-2">ID:</label>
        <input class="col" type="text" id="student_id" name="student_id" readonly="yes" value="<?= $student_id ?>">
    </div>

	<div class="row mb-4">
        <label class="col-md-2">Nama:</label>
        <input class="col" type="text" id="student_name" name="student_name" value="<?= $student_name ?>">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">NIM:</label>
        <input class="col" type="text" id="student_nim" name="student_nim" value="<?= $student_nim ?>">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">No. Telepon:</label>
        <input class="col" type="text" id="student_phone" name="student_phone" value="<?= $student_phone ?>">
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Dosen Wali:</label>

        <select class="col" name="student_lecturer_id">
            <option value="0">Pilih Dosen Wali...</option>
            <?php foreach ($lecturer_data as $lecturer): ?>
                <option value="<?= $lecturer['id'] ?>" <?php if ($lecturer['id'] == $student_lecturer_id) { echo "selected"; } ?> ><?= $lecturer['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="row mb-4">
        <label class="col-md-2">Tanggal registrasi:</label>
        <input class="col-md-4" type="date" id="student_join_date" name="student_join_date" value="<?= $student_join_date ?>">
    </div>
            
    <button type="submit" class="btn mb-2 mb-md-0 btn-success" name="edit_student">Submit</button>
    <button type="button" onclick="location.href='index.php?page=students'" class="btn mb-2 mb-md-0 btn-danger" name="">Cancel</button>
</form>