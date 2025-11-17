<div class="row mb-4 ">
	<div class="col-md-12">
		<h2 class="heading-section">Manajemen Artikel</h2>
	</div>
</div>

<div class="mb-4">
    <button type="button" onclick="location.href='?page=articles&action=add'" class="btn mb-2 mb-md-0 btn-primary">Tambah Artikel Baru...</button>
</div>

<table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>JUDUL</th>
        <th>DOI</th>
        <th>PENULIS</th>
        <th>DOSEN PENGAMPU</th>
        <th>TGL. PEMBUATAN</th>
        <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($article_data as $row):
                $del_script = "if (confirm(\"Yakin ingin menghapus data?\")) { location.href = \"?page=articles&action=delete&id=$row[id]\" }";
                echo "
            <tr>
                <th>$row[id]</th>
                <td>$row[title]</td>
                <td>$row[doi]</td>
                <td>$row[creator_name]</td>
                <td>$row[lecturer_name]</td>
                <td>$row[creation_date]</td>
                <td>
                    <a class='btn btn-info' href='?page=articles&action=view&id=$row[id]'>View</a>
                    <a class='btn btn-success' href='?page=articles&action=edit&id=$row[id]'>Edit</a>
                    <button class='btn btn-danger' type='button' onclick='$del_script'>Delete</button>
                </td>
            </tr>
            ";
            endforeach;
        ?>
    </tbody>
</table>