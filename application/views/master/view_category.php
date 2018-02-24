<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->
		<div style="margin-bottom: 20px">
			<button class="btn btn-success" onclick="add()"><i class="glyphicon glyphicon-plus"></i> Add data Category</button>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				Data Category
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
						<tr>
							<th>No</th>
							<th>font</th>
							<th>Nama</th>
							<th>Deskripsi</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php $no=1; foreach($category as $row){ ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row->fa; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->deskrip; ?></td>
								<td class="center">
									<a class="btn btn-primary" onclick="edit_bid(<?php echo $row->id_cat;?>)">
										<i class="fa fa-pencil"></i>
									</a>
									<a class="btn btn-danger" onclick="delete_bid(<?php echo $row->id_cat;?>)">
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

<script type="text/javascript">
	var save_method; //for save method string
	var table;

	$(document).ready(function() {
		$('#dataTables-example').DataTable(); } );

	function add()
	{
		save_method = 'add';
		$('#form')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string
		$('#modal_form').modal('show'); // show bootstrap modal

	}

	function edit_bid(id)
	{
		save_method = 'update';
		$('#form')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string

		//Ajax Load data from ajax
		$.ajax({
			url : "<?php echo site_url('category/edit/')?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{
				$('[name="id"]').val(data.id_cat);
				$('[name="fa"]').val(data.fa);
				$('[name="nama"]').val(data.nama);
				$('[name="desk"]').val(data.deskrip);

				$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
				$('.modal-title').text('Edit Category'); // Set title to Bootstrap modal title

			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});
	}

	function save()
	{

			$('#btnSave').text('saving...'); //change button text
			$('#btnSave').attr('disabled',true); //set button disable

			var url;
			if(save_method == 'add')
			{
				url = "<?php echo site_url('category/tambah')?>";
			}
			else
			{
				url = "<?php echo site_url('category/update')?>";
			}

			// ajax adding data to database
			$.ajax({
				url : url,
				type: "POST",
				data: $('#form').serialize(),
				dataType: "JSON",
				success: function(data)
				{
					if(data.status) //if success close modal and reload ajax table
					{
						$('#modal_form').modal('hide');
						location.reload();
					}
					else
					{
						for (var i = 0; i < data.inputerror.length; i++)
						{
							$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
							$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
						}
					}
					$('#btnSave').text('save'); //change button text
					$('#btnSave').attr('disabled',false); //set button enable
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error adding / update data');
					$('#btnSave').text('save'); //change button text
					$('#btnSave').attr('disabled',false); //set button enable
				}
			});
	}

	function delete_bid(id)
	{
		if(confirm('Are you sure delete this data?'))
		{
			// ajax delete data from database
			$.ajax({
				url : "<?php echo site_url('category/delete')?>/"+id,
				type: "POST",
				dataType: "JSON",
				success: function(data)
				{
					location.reload();
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error deleting data');
				}
			});
		}
	}
</script>
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title">Form Data Category</h3>
			</div>
			<div class="modal-body form">
				<form id="form" action="#" class="form-horizontal">
					<input type="hidden" value="" name="id" />
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Font Kategori</label>
							<div class="col-md-9 col-sm-9">
								<input type="text" id="fa" name="fa" placeholder="Input Nama Font" class="form-control" data-validation="required" >
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Nama Kategori</label>
							<div class="col-md-9 col-sm-9">
								<input type="text" id="nama" name="nama" placeholder="Input Nama Kategori" class="form-control" data-validation="required" >
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Data Deskripsi</label>
							<div class="col-md-9 col-sm-9">
								<textarea name="desk" rows="2" class="form-control" data-validation="required"></textarea>
								<span class="help-block"></span>
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" id="btnSave" onclick="save()" class="btn btn-primary">Save Changes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div><!-- /.modal-content -->
		</form>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
