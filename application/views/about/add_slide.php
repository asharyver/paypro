<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->

		<div class="panel panel-default">
			<div class="panel-heading">
				Data Slide Paypro
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo site_url(); ?>How/tambah" enctype="multipart/form-data" id="form">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label>Bagian</label>
						<select name="bag" class="form-control" data-validation="required">
							<option value=""> -- Pilih Bagian -- </option>
							<option value="Daftar"> Daftar </option>
							<option value="Topup saldo"> Topup Saldo </option>
							<option value="Transfer uang"> Transfer Uang </option>
							<option value="Bayar"> Bayar </option>
							<option value="Tarik tunai"> Tarik Tunai </option>
						</select>
					</div>
					<div class="form-group">
						<label>Active</label>
						<select name="act" class="form-control" data-validation="required">
							<option value=""> -- Pilih Active -- </option>
							<option value="0"> 0 </option>
							<option value="1"> 1 </option>
							<option value="2"> 2 </option>
							<option value="3"> 3 </option>

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
						<label>Gambar SLide Paypro</label>
						<input type="file" name="foto" class="form-control" data-validation="mime size"
							   data-validation-allowing="jpg, png, jpeg"
							   data-validation-max-size="512kb">
						* Max Image 512kb
						* Type Image jpg, jpeg, png
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save Changes</button>
						<a class="btn btn-danger" href="<?=site_url('How'); ?>">Back</a>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>
