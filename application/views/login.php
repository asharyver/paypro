<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi Penilaian Kinerja</title>
	<link rel="shortcut icon" href="<?php echo base_url() ?>siminta/assets/img/favicon.png">
	<!-- Core CSS - Include with every page -->
	<link href="<?php echo base_url(); ?>siminta/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>siminta/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>siminta/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>siminta/assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>siminta/assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

<div class="container">

	<div class="row">
		<div class="col-md-12 text-center logo-margin ">
			<img src="<?php echo base_url() ?>siminta/assets/img/logo paypro.png">
			<h2><strong>Welcome to Dashboard Paypro</strong></h2>
			<br><div align="center"><h5><?php echo $this->session->flashdata('info');?></h5></div>
		</div>
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Please Sign In</h3>
				</div>
				<div class="panel-body">
					<form role="form" method="post" action="<?php echo base_url('auth/login'); ?>">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Input Email Valid" required name="username" type="text" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder=" Input Password" required name="password" type="password">
							</div>

							<!-- Change this to a button or input when using this as a form -->
							<button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="<?php echo base_url(); ?>siminta/assets/plugins/jquery-1.10.2.js"></script>
<script src="<?php echo base_url(); ?>siminta/assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>siminta/assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
