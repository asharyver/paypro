<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->

		<div class="panel panel-default">
			<div class="panel-heading">
				Data Career
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo site_url(); ?>career/update" enctype="multipart/form-data" id="form">
				<div class="col-md-8 col-sm-8">
					<div class="form-group">
						<label>Nama category</label>
						<input type="hidden" name="id" value="<?=$car->id_job; ?>">
						<select name="cat" class="form-control">
							<option class="form-control" value="<?=$car->id_cat; ?>"><?=$car->nama; ?></option>
							<option value=""> -- Pilih category -- </option>
							<?php foreach ($cat as $row){ ?>
								<option class="form-control" value="<?php echo $row->id_cat; ?>"><?php echo $row->nama; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Job</label>
						<input type="text" name="nama" class="form-control" value="<?=$car->nm_job; ?>" placeholder="Input Nama Job" data-validation="required" >
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea rows="4" type="text" class="form-control" name="desk" data-validation="required"><?=$car->deskripsi; ?></textarea>
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
						<button type="submit" class="btn btn-primary">Save Changes</button>
						<a class="btn btn-danger" href="<?=site_url('career'); ?>">Back</a>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>
