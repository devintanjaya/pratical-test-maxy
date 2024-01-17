<?php if (isset($heading)) { ?>
    <h1 class="page-title"><?= $heading ?></h1>
<?php } ?>

<div class = "col-md-12 col-lg-12">

	<div class = "col-md-1 col-lg-1"></div>

	<div class = "col-md-10 col-lg-10">

		<div class = "col-12 col-md-6 col-lg-6 float-start kolom-kiri">

			<div class = "col-md-12 row row-master-barang">
				<label class = "barang-label">SKU : </label>
				<input type = "text" id = "sku" name = "sku" class = "form__input col-xs-12">
			</div>

			<div class = "col-md-12 row row-master-barang">
				<label class = "barang-label">Nama : </label>
				<input type = "text" id = "nama" name = "nama" class = "form__input col-xs-12">
			</div>

			<div class = "col-md-12 row row-master-barang d-none">
				<label class = "barang-label">Link Image : </label>
				<input type="file" id = "gambar" name = "gambar" class = "form__input col-xs-12">
			</div>

		</div>

		<div class = "col-12 col-md-6 col-lg-6 float-end kolom-kanan">

			<div class = "col-md-12 row row-master-barang">
				<label class = "barang-label">Quantity : </label>
				<input type = "number" id = "quantity" name = "quantity" value = "1" class = "form__input col-xs-12">
			</div>

			<div class = "col-md-12 row row-master-barang">
				<label class = "barang-label">Price Before Discount : </label>
				<input type = "text" id = "price-before-discount" name = "price-before-discount" class = "form__input col-xs-12">
			</div>

			<div class = "col-md-12 row row-master-barang">
				<label class = "barang-label">Price After Discount : </label>
				<input type = "text" id = "price-after-discount" name = "price-after-discount" class = "form__input col-xs-12">
			</div>

		</div>

		<div class = "col-12 col-md-12 col-lg-12 row">
			<label class = "barang-label">Deskripsi Barang : </label>
			<input type = "text" id = "deskripsi" name = "deskripsi" class = "form__input col-12">
		</div>

		<div class = "col-md-12">
			<input type = "button" id = "insert-barang" class = "" value = "Tambah Barang">
		</div>

	</div>

	<div class = "col-md-1 col-lg-1"></div>

</div>


