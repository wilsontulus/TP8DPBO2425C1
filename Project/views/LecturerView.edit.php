<?php

$lecturer_id = "";
$lecturer_name = "";
$lecturer_nidn = "";
$lecturer_phone = "";
$lecturer_join_date = "";

if (isset($_GET["id"])) {
    foreach ($lecturer_data as $data):
        if ($data["id"] == $_GET["id"]) {
            $lecturer_id = $_GET["id"];
            $lecturer_name = $data["name"];
            $lecturer_nidn = $data["nidn"];
            $lecturer_phone = $data["phone"];
            $lecturer_join_date = $data["join_date"];
        }
    endforeach;
}

?>

<div class="row mb-4 ">
	<div class="col-md-12">
		<h2 class="heading-section">Ubah Data Dosen</h2>
	</div>
</div>


    <form action="index.php?page=lecturers" method="POST">
        <div class="row mb-4">
            <label class="col-md-2">ID:</label>
            <input class="col" type="text" id="lecturer_id" name="lecturer_id" readonly="yes" value="<?= $lecturer_id ?>">
        </div>

        <div class="row mb-4">
            <label class="col-md-2">NIDN:</label>
            <input class="col" type="text" id="lecturer_name" name="lecturer_nidn" value="<?= $lecturer_nidn ?>">
        </div>

        <div class="row mb-4">
            <label class="col-md-2">Nama:</label>
            <input class="col" type="text" id="lecturer_nidn" name="lecturer_name" value="<?= $lecturer_name ?>">
        </div>

        <div class="row mb-4">
            <label class="col-md-2">No. Telp:</label>
            <input class="col" type="text" id="lecturer_phone" name="lecturer_phone"value="<?= $lecturer_phone ?>">
        </div>

        <div class="row mb-4">
            <label class="col-md-2">Tanggal masuk:</label>
            <input class="col-md-4" type="date" id="lecturer_join_date" name="lecturer_join_date"value="<?= $lecturer_join_date ?>">
        </div>
            
        <button type="submit" class="btn mb-2 mb-md-0 btn-success" name="edit_lecturer">Submit</button>
        <button type="button" onclick="location.href='index.php?page=lecturers'" class="btn mb-2 mb-md-0 btn-danger" name="">Cancel</button>
    </form>