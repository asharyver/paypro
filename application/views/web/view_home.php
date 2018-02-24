	<div class="banner-bottom service_agile">
			<div class="col-md-6 col-sm-6 head_kiri" >
				<h2><strong>#Untung<br>Pake Paypro</strong></h2><br>
				<p style="color: #f0f0f1">Pembelian Paket Pulsa, PLN, Transfer, Paket Data, membayar langganan<br> internet & tv, membayar tagihan air(PDAM), berinvestasi, serta membayar
				menggunakan QR di toko atau minimarket favorit anda semudah menggerakan jari</p><br>
				<a href="#" class="btn-xl">Cari Tau</a>
			</div>
			<div class="col-md-6 portfolio-grid_left" style="padding: 5px 60px 60px 60px">
				<img src="<?=base_url('web/images/head2.png'); ?>" class="img-responsive" />
			</div>
		<div class="clearfix"> </div>
	</div>
	<?php foreach ($atas as $data) { ?>
	<!-- Top part of the slider -->
	<div class="row">
		  <div class="col-xs-12">
			<div class="col-sm-6 col-md-6">
				<img width="240px" src="<?=base_url('./siminta/assets/about/'. $data->gambar); ?>" class="img-responsive" style="padding-top: 65px; margin-left: 100px"/>
				<div class="gbr-phone">
					<img class="img-responsive" src="<?=base_url()?>web/images/42mdpi.png">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 ctn_kanan">
				<h2 class="hrf-std"><strong><?=$data->nama; ?></strong></h2><br>
				<p><?=$data->ket; ?></p><br>
				<a href="#" class="btn-xl">Cari Tau</a>
			</div>
		  </div>
		<?php  } ?>
		<?php foreach ($mid as $data) { ?>
		  <div class="col-xs-12">
			<div class="col-md-6 col-sm-6 ctn_kiri">
				<h2 class="hrf-std"><strong><?=$data->nama; ?></strong></h2><br>
				<p><?=$data->ket; ?></p><br>
				<a href="#" class="btn-xl">Cari Tau</a>
			</div>
			<div class="col-md-6 col-sm-6" style="padding: 0px 0px 0px 70px">
				<img width="240px" src="<?=base_url('./siminta/assets/about/'. $data->gambar); ?>" class="img-responsive" style="padding-top: 65px; margin-left: 45px"/>
				<div class="gbr-phone">
					<img class="img-responsive" src="<?=base_url()?>web/images/42mdpi.png">
				</div>
			</div>
		  </div>
		<?php } ?>
		<?php foreach ($down as $data) { ?>
		<div class="col-xs-12" style="margin-bottom: 70px">
			<div class="col-sm-6 col-md-6">
				<img width="240px" src="<?=base_url('./siminta/assets/about/'. $data->gambar); ?>" class="img-responsive" style="padding-top: 65px; margin-left: 100px"/>
				<div class="gbr-phone">
					<img class="img-responsive" src="<?=base_url()?>web/images/42mdpi.png">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 ctn_kanan">
				<h2 class="hrf-std"><strong><?=$data->nama; ?></strong></h2><br>
				<p><?=$data->ket; ?></p><br>
				<a href="#" class="btn-xl">Cari Tau</a>
			</div>
		</div>
		<?php } ?>
		<div class="clearfix"> </div>
	</div>
	<div class="row" style="background-color: #800080">
		<div class="col-md-6 col-sm-6 ctn_saldo" >
			<img src="<?=base_url('web/images/img_saldo.png'); ?>" class="img-responsive" />
		</div>
		<div class="col-md-6 col-sm-6" style="padding: 200px 100px 10px 70px">
			<h1 style="color: #f0f0f1"><strong>Download Sekarang</strong></h1><br>
			<p class="standar">Download sekarang dan dapatkan promo promo<br> menarik dari paypro.</p><br>
			<a href="https://www.apple.com/ios/app-store/" target="_blank"><img class="img" src="<?php echo base_url(); ?>web/images/apple.png"></a>&nbsp;&nbsp;
			<a href="https://play.google.com/store/apps/details?id=id.paypro&hl=in" target="_blank"><img class="img" src="<?php echo base_url(); ?>web/images/GooglePlay.png" ></a>
		</div>
		<div class="clearfix"> </div>
	</div>

