<style type="text/css">
	.career{
		border:	2px solid #dbdbdb;
	}
</style>
	<div class="container">
		<h3 class="w3l_header w3_agileits_header">List <span>Careers</span></h3><br>
			<?php foreach ($jobs as $car) { ?>
		<div class="agile_wthree_inner_grids">
			<div class="col-md-4 col-sm-4 career">
				<div class="agileinfo_banner_bottom_pos" style="margin: 30px">
							<h3 align="center"><strong><?=$car->nm_job; ?></strong></h3><br>
							<?php $isi= $car->deskripsi; $isi= character_limiter($isi,100); ?>
							<p><?php echo $isi; ?></p><hr>
							<div class="agileits-button">
								<a href="<?=site_url('Careers/next/'.$car->id_job); ?>" role="button"> More Detail »</a>
							</div>
							<div class="w3-button">
								<a  href="<?=site_url('Careers/apply/'.$car->id_job); ?>" role="button"> Apply Now </a>
							</div>
						<div class="clearfix"> </div>
				</div>
			</div>
		</div>
			<?php } ?>
		<div class="clearfix"> </div>
	</div><br>

