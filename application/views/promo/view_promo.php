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
			<a class="btn btn-success" href="<?=site_url('promo/add');?>"><i class="glyphicon glyphicon-plus"></i>Add Promo</a>
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
							<th>Nama</th>
							<th>Keterangan</th>
							<th>Image</th>
							<th>Periode</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php $no=1; foreach($promo as $row){ ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->ket; ?></td>
								<td><img width="140" height="100" src="<?=base_url('./siminta/assets/promo/'.$row->gambar);?>"</td>
								<td><?php echo $row->periode; ?></td>
								<td class="center">
									<a class="btn btn-default" href="<?=site_url('promo/view/'. $row->id_promo); ?>" >
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-primary" href="<?=site_url('promo/edit/'. $row->id_promo); ?>" >
										<i class="fa fa-pencil"></i>
									</a>
									<a class="btn btn-danger" onclick="return confirm('Are you sure delete this data.....???')" href="<?=site_url('promo/delete/'. $row->id_promo); ?>" >
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
