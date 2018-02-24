<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" style="width: 70px;">
		<img src="<?php echo base_url(); ?>siminta/assets/img/logo paypro.png" />
	</a>
	<h3>Paypro</h3>
</div>
<!-- end navbar-header -->
<!-- navbar-top-links -->
<ul class="nav navbar-top-links navbar-right">
	<!-- main dropdown -->

	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown"  href="#">
			<span class="top-label label label-warning" id="load_row"><?php if($jnotif>0) { echo $jnotif; } ?></span> <i class="fa fa-bell fa-2x"></i>
		</a>
		<!-- dropdown alerts-->
		<ul class="dropdown-menu dropdown-alerts" id="load_data">

				<? $no=0; foreach($getnotif as $rnotif){ $no++;
				if($no % 2==0){$strip='strip1';}  //agar pesan yang tampil striped beda warna
				else{$strip='strip2';}
				?>

			<li><a href="#" class="<?=$strip?>">
					<?=$rnotif->id_bagian?>
					<small><b><?=$rnotif->nm_bagian ?> </b>
						</small>
				</a>
			</li>
			<? }?>
				<a href="#">
					<div>
						<i class="fa fa-comment fa-fw"></i>New Comment
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>

		</ul>
		<!-- end dropdown-alerts -->
	</li>

	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-user fa-3x"></i>
		</a>
		<!-- dropdown user-->
		<ul class="dropdown-menu dropdown-user">
			<li><a href="<?=site_url('profil'); ?>"><i class="fa fa-user fa-fw"></i>User Profile</a>
			</li>
			<li class="divider"></li>
			<li><a href="<?php echo base_url() ?>Auth/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
			</li>
		</ul>
		<!-- end dropdown-user -->
	</li>
	<!-- end main dropdown -->
</ul>
