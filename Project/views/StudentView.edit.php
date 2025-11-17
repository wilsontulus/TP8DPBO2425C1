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