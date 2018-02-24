<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->

		<div class="panel panel-default">
			<div class="panel-heading">
				View Data Apply
			</div>
			<div class="panel-body">

				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label>First Name</label>
						<input type="hidden" name="id" value="<?=$apply->id_calon; ?>">
						<input type="text" name="nama" class="form-control" value="<?=$apply->nm_depan; ?>" readonly >
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="ket" class="form-control" value="<?=$apply->nm_belakang; ?>" readonly >
					</div>
					<div class="form-group">
						<label>Telephone</label>
						<input type="text" name="per" class="form-control" value="<?=$apply->no_telp; ?>" readonly>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="per" class="form-control" value="<?=$apply->email; ?>" readonly>
					</div>
					<div class="form-group">
						<label>Summary</label>
						<textarea rows="3" class="form-control" readonly><?=$apply->summary; ?></textarea>
					</div>
					<div class="form-group">
						<label >Nama File</label>
						<input type="text" name="userfile" value="<?php echo $apply->doc; ?>"  class="form-control">
					</div>
					<div class="form-group">
						<a class="btn btn-danger" href="<?=site_url('apply'); ?>">Back</a>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>
