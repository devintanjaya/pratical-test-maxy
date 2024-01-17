<?php if (isset($heading)) { ?>
    <h1 class="page-title"><?= $heading ?></h1>
<?php } ?>

<div class = "col-md-12 col-lg-12">

	<div class = "col-md-1 col-lg-1"></div>

	<div class = "col-md-10 col-lg-10 col-md-offset-1">

		<div class = "col-md-12">
			<div id = "to-add-barang" class = "btn">Tambah Barang</div>
		</div>

		<div id = "tabel" class = "col-md-12 col-lg-12">

		</div>
	</div>

	<div class = "col-md-1 col-lg-1"></div>

</div>

<div class="modal fade" id="delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class = "col-12">
                	Yakin hapus?
                </div>
                <div class = "col-12">
                	<input type = "button" id = "delete-yes" value = "Ya">
                	<input type = "button" id = "delete-no" value = "Tidak">
                	<input type = "hidden" id = "delete-id" value = "0">
                </div>
            </div>
        </div>
    </div>
</div>
