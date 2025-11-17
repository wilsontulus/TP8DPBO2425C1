<div class="row mb-4 ">
	<div class="col-md-12">
		<h2 class="heading-section">Dosen Baru</h2>
	</div>
</div>


    <form action="index.php?page=lecturers" method="POST">
        <div class="row mb-4">
            <label class="col-md-2">NIDN:</label>
            <input class="col" type="text" id="lecturer_nidn" name="lecturer_nidn">
        </div>

        <div class="row mb-4">
            <label class="col-md-2">Nama:</label>
            <input class="col" type="text" id="lecturer_name" name="lecturer_name">
        </div>

        <div class="row mb-4">
            <label class="col-md-2">No. Telp:</label>
            <input class="col" type="text" id="lecturer_phone" name="lecturer_phone">
        </div>

        <div class="row mb-4">
            <label class="col-md-2">Tanggal masuk:</label>
            <input class="col-md-4" type="date" id="lecturer_join_date" name="lecturer_join_date">
        </div>
            
        <button type="submit" class="btn mb-2 mb-md-0 btn-success" name="add_lecturer">Submit</button>
        <button type="button" onclick="location.href='index.php?page=lecturers'" class="btn mb-2 mb-md-0 btn-danger" name="">Cancel</button>
    </form>