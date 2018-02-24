<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Paypro Administrator</title>
<head>
	<?php echo $headAdmin; ?>

	<?php echo $jsAdmin; ?>
	<!--script type="text/javascript">
		setInterval(function(){
			$("#load_row").load('<?=base_url()?>notif/load_row')
		}, 5000); //menggunakan setinterval jumlah notifikasi akan selalu update setiap 2 detik diambil dari controller notifikasi fungsi load_row

		setInterval(function(){
			$("#load_data").load('<?=base_url()?>notif/load_data')
		}, 5000); //yang ini untuk sela

		function myFunction() {
			$.ajax({
				url: "<?=site_url()?>notif/view",
				type: "POST",
				processData:false,
				success: function(data){
					$("#load_row").remove();
					$("#notif-latest").show();$("#notif-latest").html(data);
				},
				error: function(){}
			});
		}

		$(document).ready(function() {
			$('body').click(function(e){
				if ( e.target.id != 'notif-icon'){
					$("#notif-latest").hide();
				}
			});
		});
	</script-->
</head>

<body>
<!--  wrapper -->
<div id="wrapper">
	<!-- navbar top -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
		<!-- navbar-header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>

			</button>
			<a class="navbar-brand" style="width: 70px;">
				<img src="<?php echo base_url(); ?>siminta/assets/img/favicon.png" />
			</a>
			<h3 style="width: 350px;">Dashboard Paypro</h3>
		</div>
		<!-- end navbar-header -->
		<!-- navbar-top-links -->
		<ul class="nav navbar-top-links navbar-right">
			<!-- main dropdown -->


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


		<!-- end navbar-top-links -->
	</nav>
	<!-- end navbar top -->

	<!-- navbar side -->
	<?php echo $sidebarAdmin; ?>
	<!-- end navbar side -->
	<!--  page-wrapper -->
	<div id="page-wrapper">


		<div class="row">
			<!--  page header -->
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo $judul; ?></h1>
			</div>
			<!-- end  page header -->
		</div>
	<?php echo $contentAdmin; ?>
	</div>
	<!-- end page-wrapper -->

</div>
<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->

<script>
	$(document).ready(function () {
		$('#dataTables-example').dataTable();

		tinymce.init({
			selector: '#respon',
			plugins : 'advlist autolink link lists charmap print preview'
		});

		tinymce.init({
			selector: '#req',
			plugins : 'advlist autolink link lists charmap print preview'
		});
		tinymce.init({
			selector: '#detail',
			plugins : 'advlist autolink link lists charmap print preview'
		});

		//datepicker
		$('.datepicker').datepicker({
			autoclose: true,
			format: "yyyy-mm-dd",
			todayHighlight: true,
			orientation: "top auto",
			todayBtn: true,
			todayHighlight: true,
		});

		$(function () {
			//Date picker
			$('#tgl').datepicker({
				autoclose: true,
				format: "yyyy-mm-dd",
				todayHighlight: true,
			});
		});
		$(function () {
			//Date picker
			$('#per').datepicker({
				autoclose: true,
				format: "yyyy-mm",
				todayHighlight: true,
			});
		});

	});
</script>
<script type="text/javascript">
	$.validate({
		modules : 'file, date',
		form: '#form',

		validateOnBlur: true,
		showHelpOnFocus: true,
		addSuggestions: true,
		onSuccess: function($form) {
			console.log("success")
			return true;
		},
		onError: function() {
			console.log("Error")
		}
	});
</script>
</body>
</html>
