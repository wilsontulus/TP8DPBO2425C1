<div class="row mb-4 ">
	<div class="col-md-12">
		<h2 class="heading-section">Manajemen Mahasiswa</h2>
	</div>
</div>

<div class="mb-4">
    <button type="button" onclick="location.href='?page=students&action=add'" class="btn mb-2 mb-md-0 btn-primary">Tambah Mahasiswa	 Baru...</button>
</div>

<table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>NIM</th>
        <th>NO. TELP</th>
        <th>DOSEN WALI</th>
        <th>TANGGAL REG.</th>
        <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($student_data as $row):
                $del_script = "if (confirm(\"Yakin ingin menghapus data?\")) { location.href = \"?page=students&action=delete&id=$row[id]\" }";
                echo "
            <tr>
                <th>$row[id]</th>
                <td>$row[name]</td>
                <td>$row[nim]</td>
                <td>$row[phone]</td>
                <td>$row[lecturer_name]</td>
                <td>$row[join_date]</td>
                <td>
                        <a class='btn btn-success' href='?page=students&action=edit&id=$row[id]'>Edit</a>
                        <button class='btn btn-danger' type='button' onclick='$del_script'>Delete</button>
                        </td>
            </tr>
            ";
            endforeach;
        ?>
    </tbody>
</table>