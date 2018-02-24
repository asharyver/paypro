	<style type="text/css">
		.apply{
			outline: none;
			padding: 14px 0;
			text-align: center;
			color: #fff;
			border: none;
			font-size: 1em;
			width: 100%;
			background: #efb312;
			margin: 1em 0 0;
			text-transform: uppercase;
			letter-spacing: 1px;
			background: #111;
		}
	</style>
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header w3_agileits_header"> <?php echo $data->nm_job; ?> </h3>
		</div>
		<div class="agile_wthree_inner_grids">
			<div class="col-md-8 col-sm-8 event-left w3-agile-event-left">
				<div class="event-left1 w3-agile-event-left1">
					<div class="event-left1-left agile-event-left1-left">

						<div class="event-left1-left-pos agileits-w3layouts-event-left1-left-pos">
							<h4 style="color: #dbdbdb"><strong> Detail Careers</strong></h4>
						</div>
					</div>
					<div class="event-left1-right ">
						<br><h3>Description</h3>
						<p><?=$data->deskripsi; ?></p>
						<div class="event-left1-right ">
							<br><h3>Responsibility</h3>
							<p><?=$data->responsibility; ?></p>
						</div>
						<div class="event-left1-right ">
							<br><h3>Requirement</h3>
							<p><?=$data->requirement; ?></p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 event-right wthree-event-right">
				<div class="event-right1 agileinfo-event-right1">
							<a class="btn btn-default apply" href="<?=site_url('careers/apply/'. $data->id_job); ?>" > Apply Now </a>
					<div class="categories w3ls-categories">
						<h3>Not what you had in mind ? </h3>
						<ul>
							<li><h4><a href="<?=site_url('careers'); ?>">Look for another job</a></h4></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div><br>

