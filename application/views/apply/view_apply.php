<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->
		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-info" role="alert">
				<span><?php echo $this->session->flashdata('success'); ?></span>
			</div>
			<?php elseif ($this->session->flashdata('edit')): ?>
				<div class="alert alert-info" role="alert">
					<span><?php echo $this->session->flashdata('edit'); ?></span>
				</div>
		<?php endif; ?>
		<div style="margin-bottom: 20px">

		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				Data Apply
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
						<tr>
							<th>No</th>
							<th>Nama Depan</th>
							<th>Nama Belakang</th>
							<th>Email</th>
							<th>No Telp</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php $no=1; foreach($apply as $row){ ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row->nm_depan; ?></td>
								<td><?php echo $row->nm_belakang; ?></td>
								<td><?php echo $row->email; ?></td>
								<td><?php echo $row->no_telp; ?></td>
								<td class="center">
									<a class="btn btn-primary" href="<?=site_url('apply/view/'. $row->id_calon); ?>" >
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-danger" onclick="return confirm('Are you sure delete this data.....???')" href="<?=site_url('apply/delete/'. $row->id_calon); ?>" >
										<i class="fa fa-trash-o"></i>
									</a>
								</td>
							</tr>
							<?php $no++; }?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>
