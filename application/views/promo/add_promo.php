<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->

		<div class="panel panel-default">
			<div class="panel-heading">
				Data Promo
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo site_url(); ?>promo/tambah" enctype="multipart/form-data" id="form">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label>Nama Promo</label>
						<input type="text" name="nama" class="form-control" placeholder="Input Nama Promo" data-validation="required" >
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<input type="text" name="ket" class="form-control" placeholder="Input Keterangan Promo" data-validation="required" >
					</div>
					<div class="form-group">
						<label>Periode</label>
						<input type="text" name="per" class="form-control" placeholder="Input Periode Promo" data-validation="required" >
					</div>
					<div class="form-group">
						<label>Gambar Promo</label>
						<input type="file" name="foto" class="form-control" data-validation="mime size"
							   data-validation-allowing="jpg, png, jpeg"
							   data-validation-max-size="512kb">
						* Max Image 512kb
						* Type Image jpg, jpeg, png
					</div>
					<div class="form-group">
						<label>Detail</label>
						<textarea type="text" class="form-control" name="detail" id="detail" value="<?php echo set_value('detail'); ?>"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save Changes</button>
						<a class="btn btn-danger" href="<?=site_url('promo'); ?>">Back</a>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>
