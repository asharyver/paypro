<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->

		<div class="panel panel-default">
			<div class="panel-heading">
				Data About Paypro
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo site_url(); ?>about/tambah" enctype="multipart/form-data" id="form">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label>Posisi</label>
						<select name="posi" class="form-control" data-validation="required">
							<option value=""> -- Pilih Posisi -- </option>
							<option value="Atas"> Atas </option>
							<option value="Tengah"> Tengah </option>
							<option value="Bawah"> Bawah </option>
						</select>
					</div>
					<div class="form-group">
						<label> Judul</label>
						<input type="text" name="nama" class="form-control" placeholder="Input Nama Judul" data-validation="required" >
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea rows="4" class="form-control" name="ket" data-validation="required" ></textarea>
					</div>
					<div class="form-group">
						<label>Gambar Slide Paypro</label>
						<input type="file" name="foto" class="form-control" data-validation="mime size"
							   data-validation-allowing="jpg, png, jpeg"
							   data-validation-max-size="512kb">
						* Max Image 512kb
						* Type Image jpg, jpeg, png
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save Changes</button>
						<a class="btn btn-danger" href="<?=site_url('about'); ?>">Back</a>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>
