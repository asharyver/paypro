
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Payro Indonesia</title>
	<!-- custom-theme -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>siminta/assets/img/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content=" free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<?php echo $headernya; ?>
</head>

<body>
<!-- banner -->

<div class="main_section_agile inner" id="home">
	<div class="agileits_w3layouts_banner_nav ">

		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" style="margin-left: 20px" href="#"><img src="<?=base_url('web/images/logo.png'); ?>"></a></h1>

			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<?php echo $topbarnya; ?>
				</nav>
			</div>
		</nav>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //banner -->

<!-- /blog -->

	<?php echo $contentnya; ?>
<!-- //blog -->

<!-- footer -->
<div class="footer">
	<?php echo $footnya; ?>
</div>
<!-- //footer -->
	<?php echo $jsnya; ?>
</body>

</html>
