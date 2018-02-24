<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->

		<div class="panel panel-default">
			<div class="panel-heading">
				Data Merchant
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo site_url(); ?>merchant/tambah" enctype="multipart/form-data" id="form">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label>Nama kategori</label>
						<select name="kat" class="form-control" data-validation="required">
							<option value="">-- Pilih Kategori --</option>
							<option value="Kecantikan">kecantikan</option>
							<option value="Makanan & Minuman">Makanan & Minuman</option>
							<option value="Hiburan">Hiburan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Merchant</label>
						<input type="text" name="nama" class="form-control" placeholder="Input Nama Merchant" data-validation="required" >
					</div>
					<div class="form-group">
						<label>Lokasi Merchant</label>
						<input type="text" name="lok" class="form-control" placeholder="Input Lokasi Merchant" data-validation="required" >
					</div>
					<div class="form-group">
						<label>Gambar Merchant</label>
						<input type="file" name="foto" class="form-control" data-validation="mime size"
							   data-validation-allowing="jpg, png, jpeg"
							   data-validation-max-size="200kb">
						* Max Image 200kb <br>
						* Type Image jpg, jpeg, png
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save Changes</button>
						<a class="btn btn-danger" href="<?=site_url('merchant/admin'); ?>">Back</a>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>
