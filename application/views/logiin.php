
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Paypro Indonesia">
	<meta name="author" content="Aajims">
	<meta name="keyword" content="Fintech Indonesia, Paypro Indonesia">
	<link rel="shortcut icon" href="<?=base_url(); ?>assets/img/favicon.png">
	<title>Login Administrator</title>

	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<!--link href="../../vendors/css/simple-line-icons.min.css" rel="stylesheet"-->

	<link href="<?=base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body class="app flex-row align-items-center">
<div class="container">
	<div align="center">
		<img src="<?php echo base_url() ?>siminta/assets/img/logo paypro.png">
	</div>
	<br><div align="center"><h4><?php echo $this->session->flashdata('info');?></h4></div>
	<div class="row justify-content-center">
		<div class="col-md-6 col-sm-6">
				<div class="card p-4">
					<div class="card-body">
						<h2>Welcome to Dashboard Paypro</h2>
						<p class="text-muted">Sign In to your account</p>
						<form role="form" method="post" action="<?php echo base_url('auth/login'); ?>">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="icon-user"></i></span>
								</div>
								<input type="text" name="username" class="form-control" required placeholder="Email Valid" autofocus>
							</div>
							<div class="input-group mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="icon-lock"></i></span>
								</div>
								<input type="password" name="password" class="form-control" required placeholder="Password">
							</div>
							<div class="row">
							<div class="col-6">
								<button type="submit" class="btn btn-primary px-4">Login</button>
							</div>
							<div class="col-6 text-right">
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="<?=base_url(); ?>assets/js/jquery-3.0.0.js"></script>
<script src="<?=base_url(); ?>assets/bootstrap/bootstrap.min.js"></script>

</body>
</html>
