<div class="services" id="services">
	<div class="container">
		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success" role="alert">
				<span><?php echo $this->session->flashdata('success'); ?></span>
			</div>
		<?php endif; ?>
		<div class="wthree_head_section">
			<h3 class="w3l_header w3_agileits_header two">Our <span>Careers</span></h3>
		</div>
		<div class="agile_wthree_inner_grids">
			<?php foreach ($career as $cat) { ?>
			<div class="col-md-6 col-sm-6 agileits_banner_bottom_left">
				<div class="agileinfo_banner_bottom_pos">

					<div class="w3_agileits_banner_bottom_pos_grid two">
						<div class="col-xs-3 wthree_banner_bottom_grid_left">
							<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
								<span class="<?=$cat->fa; ?>" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-9 wthree_banner_bottom_grid_right">
							<h4 class="sub_service_agileits"><?=$cat->nama; ?></h4>
							<p><?=$cat->deskrip; ?></p>
							<div class="agileits-button two service">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="<?=site_url('Careers/lis/'.$cat->nama); ?>" role="button">See More »</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div><br>
