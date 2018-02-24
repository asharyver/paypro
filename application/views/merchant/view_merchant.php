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
			<a class="btn btn-success" href="<?=site_url('merchant/add');?>"><i class="glyphicon glyphicon-plus"></i> Add Merchant</a>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				Data Merchant
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
						<tr>
							<th>No</th>
							<th>kategori</th>
							<th>Nama Merchant</th>
							<th>Lokasi</th>
							<th>Foto</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php $no=1; foreach($merchant as $row){ ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row->kategori; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->lokasi; ?></td>
								<td><img width="150" height="100" src="<?=base_url('./siminta/assets/merchant/'.$row->gambar);?>"</td>
								<td class="center">
									<a class="btn btn-primary" href="<?=site_url('merchant/edit/'. $row->id_merchant); ?>" >
										<i class="fa fa-pencil"></i>
									</a>
									<a class="btn btn-danger" onclick="return confirm('Are you sure delete this data.....???')" href="<?=site_url('merchant/delete/'. $row->id_merchant); ?>" >
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
