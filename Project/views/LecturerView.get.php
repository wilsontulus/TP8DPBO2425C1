<div class="row mb-4 ">
	<div class="col-md-12">
		<h2 class="heading-section">Manajemen Dosen</h2>
	</div>
</div>

<div class="mb-4">
    <button type="button" onclick="location.href='?page=lecturers&action=add'" class="btn mb-2 mb-md-0 btn-primary">Tambah Dosen Baru...</button>
</div>

<table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>NIDN</th>
        <th>NO. TELP</th>
        <th>TANGGAL REG.</th>
        <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($lecturer_data as $row):
                $del_script = "if (confirm(\"Yakin ingin menghapus data?\")) { location.href = \"?page=lecturers&action=delete&id=$row[id]\" }";
                echo "
            <tr>
                <th>$row[id]</th>
                <td>$row[name]</td>
                <td>$row[nidn]</td>
                <td>$row[phone]</td>
                <td>$row[join_date]</td>
                <td>
                        <a class='btn btn-success' href='?page=lecturers&action=edit&id=$row[id]'>Edit</a>
                        <button class='btn btn-danger' type='button' onclick='$del_script'>Delete</button>
                        </td>
            </tr>
            ";
            endforeach;
        ?>
    </tbody>
</table>