<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.10
 * @link http://coreui.io
 * Copyright (c) 2018 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">
<?php echo $headadm; ?>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<header class="app-header navbar">
	<button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#"></a>
	<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
		<span class="navbar-toggler-icon"></span>
	</button>
	<?php echo $topbaradm ?>
	<button class="navbar-toggler aside-menu-toggler" type="button">
		<span class="navbar-toggler-icon"></span>
	</button>
</header>

<div class="app-body">
	<?php echo $sidebaradm; ?>

	<!-- Main content -->
	<main class="main">

		<!-- Breadcrumb -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item"><a href="#">Admin</a></li>
			<li class="breadcrumb-item active"><?=$judul; ?></li>

			<!-- Breadcrumb Menu-->
			<li class="breadcrumb-menu d-md-down-none">
				<div class="btn-group" role="group" aria-label="Button group">
					<a class="btn" href="#"><i class="icon-speech"></i></a>
					<a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
					<a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
				</div>
			</li>
		</ol>

		<div class="container-fluid">
			<div id="ui-view"></div>
		</div>
		<!-- /.conainer-fluid -->
	</main>

	<aside class="aside-menu">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
			</li>
		</ul>

		<?php echo $contentadm; ?>
	</aside>

</div>
<?php echo $footadm; ?>
<?php echo $jsadm; ?>
<script>
	$(document).ready(function () {
		$('#dataTables-example').dataTable();

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
