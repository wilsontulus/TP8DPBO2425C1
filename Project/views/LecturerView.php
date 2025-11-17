<div class="container my-4">
    
    <?php
        if ($_GET["action"] == "add") {
            
    ?>

    <div class="row mb-4 ">
		<div class="col-md-12">
			<h2 class="heading-section"> Dosen Baru </h2>
		</div>
    </div>

    <?php
        } else {
    ?>

    <div class="row mb-4 ">
		<div class="col-md-12">
			<h2 class="heading-section"> Manajemen Dosen </h2>
		</div>
    </div>

    <div class="mb-4">
        <button type="button" onclick="location.href='?page=lecturers&action=add'" class="btn mb-2 mb-md-0 btn-primary">Tambah Dosen Baru...</button>
    </div>

    <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>NIDN</th>
            <th>PHONE</th>
            <th>JOIN DATE</th>
            <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $row):
                echo "
            <tr>
                <th>$row[id]</th>
                <td>$row[name]</td>
                <td>$row[nidn]</td>
                <td>$row[phone]</td>
                <td>$row[join_date]</td>
                <td>
                        <a class='btn btn-success' href='?page=lecturers&action=edit&id=$row[id]'>Edit</a>
                        <a class='btn btn-danger' href='?page=lecturers&action=delete&id=$row[id]'>Delete</a>
                        </td>
            </tr>
            ";
            endforeach;
            ?>
        </tbody>
    </table>
    <?php
        }
    ?>
</div>