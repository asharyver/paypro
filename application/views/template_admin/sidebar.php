 <nav class="navbar-default navbar-static-side" role="navigation">
	<!-- sidebar-collapse -->
	<div class="sidebar-collapse">
		<!-- side-menu -->
		<ul class="nav" id="side-menu">
			<li>
				<!-- user image section-->
				<div class="user-section">

					<div class="user-info">
						<div> <strong><?php echo $this->session->userdata("nama_lengkap") ?></strong></div>
						<div class="user-text-online">
							<span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
						</div>
					</div>
				</div>
				<!--end user image section-->
			</li>
			<li class="sidebar-search">
				<!-- search section-->
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
				</div>
				<!--end search section-->
			</li>
			<?php
			$sess_level = $this->session->userdata('level');
			if ($sess_level == "admin") { ?>
			<li class="">
				<a href="<?php echo site_url() ?>Dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
			</li>
			<li>
				<a href="<?php echo site_url() ?>Profil"><i class="fa fa-flask fa-fw"></i> Data Profil</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data Master<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="<?php echo site_url() ?>User">  Data User</a>
					</li>
					<li>
						<a href="<?php echo site_url() ?>category">Data Category</a>
					</li>
				</ul>
				<!-- second-level-items -->
			</li>
			<li>
				<a href="<?php echo site_url()?>career"><i class="fa fa-table fa-fw"></i> Data Careers</a>
			</li>
			<li>
				<a href="<?php echo site_url()?>apply"><i class="fa fa-table fa-fw"></i> Data Apply</a>
			</li>
			<li>
				<a href="<?php echo site_url() ?>promo"><i class="fa fa-edit fa-fw"></i> Data Promo</a>
			</li>
			<li>
				<a href="<?php echo site_url() ?>merchant"><i class="fa fa-edit fa-fw"></i> Data Merchant</a>
			</li>
			<li>
				<a href="<?php echo site_url() ?>about"><i class="fa fa-folder fa-fw"></i> About Paypro</a>
			</li>
			<li>
				<a href="<?php echo site_url() ?>How"><i class="fa fa-folder fa-fw"></i> Cara Kerja Paypro</a>
			</li>

			<?php } else if ($sess_level == "staff") { ?>
			<li class="">
				<a href="<?php echo site_url() ?>Dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
			</li>
			<li>
				<a href="<?php echo site_url() ?>Profil"><i class="fa fa-flask fa-fw"></i> Data Profil</a>
			</li>
			<li>
				<a href="<?php echo site_url() ?>nilai/view"><i class="fa fa-1x fa-male"></i>  Penilaian</a>
			</li>
				<li>
					<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Data Laporan<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="<?php echo site_url() ?>karyawan/lap">Laporan Karyawan</a>
						</li>
						<li>
							<a href="<?php echo site_url() ?>nilai/lap">Laporan Data Nilai</a>
						</li>
					</ul>
					<!-- second-level-items -->
				</li>
			<?php }; ?>
			<li>
				<a href="<?php echo site_url() ?>Auth/logout"><i class="fa fa-sign-out"></i> Logout </a>
			</li>

		</ul>
		<!-- end side-menu -->
	</div>
	<!-- end sidebar-collapse -->
</nav>
