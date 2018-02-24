
<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->

		<div class="panel panel-default">
			<div class="panel-heading">
				Data Career
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo site_url(); ?>career/tambah" enctype="multipart/form-data" id="form">
				<div class="col-md-8 col-sm-8">
					<div class="form-group">
						<label>Nama category</label>
						<select name="cat" class="form-control">
							<option value=""> -- Pilih category -- </option>
							<?php foreach ($cat as $row){ ?>
							<option class="form-control" value="<?php echo $row->id_cat; ?>"><?php echo $row->nama; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Job</label>
						<input type="text" name="nama" class="form-control" placeholder="Input Nama Job" data-validation="required" >
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea rows="3" type="text" class="form-control" name="desk" data-validation="required" ></textarea>
					</div>
					<div class="form-group">
						<label>Responsibility</label>
						<textarea type="text" class="form-control" name="respon" id="respon" value="<?php echo set_value('respon'); ?>"></textarea>
					</div>
					<div class="form-group">
						<label>Requirement</label>
						<textarea type="text" class="form-control" name="req" id="req" value="<?php echo set_value('req'); ?>"></textarea>
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
