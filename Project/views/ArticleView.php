<div class="container my-4">
    
    <?php
        if ($_GET["action"] == "add") {
            
    ?>

    <div class="row mb-4 ">
		<div class="col-md-12">
			<h2 class="heading-section"> Artikel Baru </h2>
		</div>
    </div>

    <?php
        } else {
    ?>

    <div class="row mb-4 ">
		<div class="col-md-12">
			<h2 class="heading-section"> Manajemen Artikel </h2>
		</div>
    </div>

    <div class="mb-4">
        <button type="button" onclick="location.href='?page=articles&action=add'" class="btn mb-2 mb-md-0 btn-primary">Tambah Artikel Baru...</button>
    </div>
    <?php
        }
    ?>
</div>