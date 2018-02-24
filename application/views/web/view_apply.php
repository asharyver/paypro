
<div class="container">
	<div class="contact-form agile_inner_grids">
			<h3 class="w3l_header" style="float: left">Join Paypro as <span><?=$career->nm_job; ?></span></h3><br>
		<form method="post" action="<?php echo site_url(); ?>careers/tambah" enctype="multipart/form-data" id="form">
		<form action="#" method="post">
			<div class="col-md-6 col-sm-6">
				<div class="form-group-lg ">
					<label>First Name *</label>
					<input type="text" name="first" class="form-control" placeholder="Input First name" data-validation="required" ><br>
				</div>
				<div class="form-group-lg ">
					<label>Last Name </label>
					<input type="text" name="last" class="form-control" placeholder="Input Last Name" data-validation="required" ><br>
				</div>
				<div class="form-group-lg">
					<label>Telephone *</label>
					<input type="text" name="telp" class="form-control" placeholder="Input No Valid" data-validation="length" data-validation-length="10-12"><br>
				</div>
				<div class="form-group-lg">
					<label>Email *</label><br>
					<input type="text" name="email" class="form-control" placeholder="Input Email valid" data-validation="email" ><br>
				</div>
				<div class="form-group-lg">
					<label>Do you provide last education information in your resume ? </label><br>
					<label class="radio-inline">
						<input type="radio" name="edu" id="yes" value="Yes">Yes
					</label>&nbsp;&nbsp;
					<label class="radio-inline">
						<input type="radio" name="edu" id="no" value="No" >No
					</label>
				</div><br>
				<div class="form-group-lg">
					<label>Do you provide work experience information in your resume ? </label><br>
					<label class="radio-inline">
						<input type="radio" name="exp" id="yes" value="Yes" >Yes
					</label>&nbsp;&nbsp;
					<label class="radio-inline">
						<input type="radio" name="exp" id="no" value="No" >No
					</label>
				</div><br>
				<div class="form-group-lg">
					<label>Summary *</label><br>
					<textarea rows="2" class="form-control" name="sum" data-validation="required"></textarea>
				</div><br>
				<div class="form-group-lg">
					<label>Resume *</label><br>
					<input type="file" name="resum" class="btn btn-default" data-validation="mime size"
						   data-validation-allowing="pdf, doc, docx"
						   data-validation-max-size="2M"><br>
					Accepted file formats: pdf, doc, docx (2 MB max)
				</div>
				<div class="clearfix"> </div>
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>
	<div class="clearfix"> </div>
</div><br>
