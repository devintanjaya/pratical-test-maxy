<script>

	$("#update-barang").click(function(){

		console.log("update-barang di click");

		var id = $("#id-barang").val();
		var sku = $("#sku").val();
		var nama = $("#nama").val();
		var quantity = $("#quantity").val();
		var price_before_discount = $("#price-before-discount").val();
		var price_after_discount = $("#price-after-discount").val();
		var deskripsi = $("#deskripsi").val();

		if (id == "") {
			$("#id-barang").addClass("empty-input");
		}
		if (nama == "") {
			$("#nama").addClass("empty-input");
		}
		if (sku == "") {
			$("#sku").addClass("empty-input");
		}

		if (sku != "" && nama != "") {
			$.post( "<?= base_url("home/update_barang") ?>",
                { id : id, sku : sku, nama : nama, quantity : quantity, price_before_discount : price_before_discount, price_after_discount : price_after_discount, deskripsi : deskripsi })
            .done(function( data ) {
            	alert("ubah barang berhasil");
            	window.location.href = "<?= base_url() ?>";
            });
    	}


	});

</script>
