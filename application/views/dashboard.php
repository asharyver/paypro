<div class="row">
	<!-- Welcome -->
	<div class="col-lg-12">
		<div class="alert alert-info">
			<i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $this->session->userdata("nama_lengkap"); ?> </b>
		</div>
	</div>
	<!--end  Welcome -->
</div>
<div class="row">
	<!--quick info section -->
	<div class="col-lg-3">
		<div class="panel panel-primary text-center no-boder">
			<div class="panel-body yellow">
				<i class="fa fa-user fa-3x"></i>
				<h3><?php echo $user; ?> </h3>
			</div>
			<div class="panel-footer">
				<span class="panel-eyecandy-title">Data User
				</span>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-primary text-center no-boder">
			<div class="panel-body blue">
				<i class="fa fa-users fa-3x"></i>
				<h3><?php echo $apply; ?> </h3>
			</div>
			<div class="panel-footer">
				<span class="panel-eyecandy-title">Data Apply
				</span>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-primary text-center no-boder">
			<div class="panel-body green">
				<i class="fa fa fa-archive fa-3x"></i>
				<h3><?php echo $promo; ?></h3>
			</div>
			<div class="panel-footer">
				<span class="panel-eyecandy-title">Data Promo
				</span>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-primary text-center no-boder">
			<div class="panel-body red">
				<i class="fa fa-folder-o fa-3x"></i>
				<h3><?php echo $merchant; ?></h3>
			</div>
			<div class="panel-footer">
				<span class="panel-eyecandy-title">Data Merchant
				</span>
			</div>
		</div>
	</div>
	<!--end quick info section -->
</div>

<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3>Selamat datang <br> di Halaman Dashboard Paypro</h3>
			</div>
			<div class="panel-body">
				<p>Halaman Dashboar ini dibuat untuk bisa mengelola data yang ada di paypro .</p>
			</div>
			<div class="panel-footer">
				Panel Footer
			</div>
		</div>
	</div>

</div>
