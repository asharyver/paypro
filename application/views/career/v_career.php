<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->

		<div class="panel panel-default">
			<div class="panel-heading">
				Data Career
			</div>
			<div class="panel-body">
				<?php echo form_open_multipart('career/update'); ?>
				<div class="col-md-8 col-sm-8">
					<div class="form-group">
						<label>Nama category</label>
						<input type="hidden" name="id" value="<?=$car->id_job; ?>">
						<input type="text" class="form-control" value="<?=$car->nama; ?>">
					</div>
					<div class="form-group">
						<label>Nama Job</label>
						<input type="text" name="nama" class="form-control" value="<?=$car->nm_job; ?>" placeholder="Input Nama Job" data-validation="required" >
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea rows="4" type="text" class="form-control" name="desk" ><?=$car->deskripsi; ?></textarea>
					</div>
					<div class="form-group">
						<label>Responsibility</label>
						<textarea type="text" class="form-control" name="respon" id="respon" ><?=$car->responsibility; ?></textarea>
					</div>
					<div class="form-group">
						<label>Requirement</label>
						<textarea type="text" class="form-control" name="req" id="req" ><?=$car->requirement; ?></textarea>
					</div>
					<div class="form-group">
						<a class="btn btn-danger" href="<?=site_url('career'); ?>">Back</a>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>
