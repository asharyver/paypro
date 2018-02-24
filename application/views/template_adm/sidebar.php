<div class="sidebar">
	<nav class="sidebar-nav">
		<?php
		$sess_level = $this->session->userdata('level');
		if ($sess_level == "admin") { ?>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="main.html"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-primary">NEW</span></a>
			</li>
			<li class="nav-item">
				<a href="colors.html" class="nav-link"><i class="icon-drop"></i> Colors</a>
			</li>
			<li class="nav-item">
				<a href="typography.html" class="nav-link"><i class="icon-pencil"></i> Typograhy</a>
			</li>
			<li class="nav-title">
				Components
			</li>

			<li class="nav-item nav-dropdown">
				<a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-cursor"></i> Buttons</a>
				<ul class="nav-dropdown-items">
					<li class="nav-item">
						<a class="nav-link" href="buttons/buttons.html"><i class="icon-cursor"></i> Buttons</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="buttons/button-group.html"><i class="icon-cursor"></i> Buttons Group</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="buttons/dropdowns.html"><i class="icon-cursor"></i> Dropdowns</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="buttons/social-buttons.html"><i class="icon-cursor"></i> Social Buttons</a>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
			</li>


			<li class="nav-item">
				<a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="badge badge-primary">NEW</span></a>
			</li>
			<li class="divider"></li>
			<li class="nav-title">
				Extras
			</li>
			<li class="nav-item nav-dropdown">
				<a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
				<ul class="nav-dropdown-items">
					<li class="nav-item">
						<a class="nav-link" href="views/pages/login.html" target="_top"><i class="icon-star"></i> Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="views/pages/register.html" target="_top"><i class="icon-star"></i> Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="views/pages/404.html" target="_top"><i class="icon-star"></i> Error 404</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="views/pages/500.html" target="_top"><i class="icon-star"></i> Error 500</a>
					</li>
				</ul>
			</li>
			<li class="nav-item mt-auto">
				<a class="nav-link nav-link-success" href="http://coreui.io" target="_top"><i class="icon-cloud-download"></i> Download CoreUI</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nav-link-danger" href="http://coreui.io/pro/" target="_top"><i class="icon-layers"></i> Try CoreUI <strong>PRO</strong></a>
			</li>
		</ul>
		<?php }; ?>
	</nav>
	<a href="<?php echo site_url() ?>Auth/logout"><i class="fa fa-sign-out"></i> Logout </a>
</div>

