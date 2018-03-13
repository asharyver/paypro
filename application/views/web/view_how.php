
<div class="banner-bottom service_agile">
	<div class="col-md-6 col-sm-6" style="padding: 0px 50px 0px 200px">
		<img src="<?=base_url('web/images/head_promo.png'); ?>" class="img-responsive"  />
	</div>
	<div class="col-md-6 col-sm-6 ctn_saldo" >
		<h2 class="hrf-putih"><strong>Cara Kerja</strong></h2><br>
		<p class="hrf-putih">Melalui aplikasi Paypro, smartphone mu sekarang bisa jadi<br> alternatif pembayaran untuk segala kebutuhan mu </p><br>
	</div>
	<div class="clearfix"> </div>
</div>
	<div class="row" style="padding: 1px 30px">
		<div class="agile_wthree_inner_grids">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li><img src="<?=base_url('web/images/tabs/adaftar.png'); ?>"><br>Cara Daftar</li>
					<li><img src="<?=base_url('web/images/tabs/atopup.png'); ?>"><br>Cara Top up saldo</li>
					<li><img src="<?=base_url('web/images/tabs/atransfer.png'); ?>"><br>Cara transfer uang</li>
					<li><img src="<?=base_url('web/images/tabs/aqr.png'); ?>"><br>Cara bayar</li>
					<li><img src="<?=base_url('web/images/tabs/atarik.png'); ?>"><br>Cara tarik tunai</li>
				</ul>
				<div class="resp-tabs-container">
					<div class="tab1">
						<div class="col-xs-12">
							<div class="col-sm-6 col-md-6">
								<div class="carousel slide" id="myCarousel">
									<!-- Carousel items -->
									<?php $i=0; $activ= 'active'; foreach ($atas as $data) { ?>
									<div class="carousel-inner">
										<div class="<?=$activ; ?> item" data-slide-number=<?=$i; ?>></div>
											<img width="240px" src="<?=base_url('./siminta/assets/about/'. $data->gambar); ?>" class="img-responsive" style="padding-top: 65px; margin-left: 100px"/>
										</div>
									</div><!-- Carousel nav -->
								<?php $i++; $activ = ''; } ?>
									<div class="gbr-phone">
										<img class="img-responsive" src="<?=base_url()?>web/images/42mdpi.png">
									</div>
								</div>
							</div>

							<div class="col-md-6 col-sm-6 ctn_kanan" id="carousel-text"></div>

							<div id="slide-content" style="display: none;">
								<!--div id=slide-content-<?=$i; ?>">
									<h2 class="hrf-std"><strong><?=$data->nama; ?></strong></h2><br>
									<p<?=$data->ket; ?></p><br>
									<a href="#" class="btn-xl">Cari Tau</a>
								</div-->
								<a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
									<i class="fa fa-chevron-right fa-lg text-muted"></i>
								</a>
							</div>

						</div>
						<div class="clearfix"></div>
					</div>

					<div class="tab2">

						<div class="col-md-6 tab-info">
							<h4>Lorem ipsum dolor sit amet</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium
								dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet fusce eget erat nunc. Sed fringilla sem vitae
								mi interdum commodo.</p>

						</div>
						<div class="col-md-6 tab-info-img">
							<img src="images/g2.jpg" alt="img">
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="tab3">

						<div class="col-md-6 tab-info-img">
							<img src="images/g1.jpg" alt="img">
						</div>
						<div class="col-md-6 tab-info">
							<h4>Lorem ipsum dolor sit amet</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium
								dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet fusce eget erat nunc. Sed fringilla sem vitae
								mi interdum commodo.</p>

						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tab4">

						<div class="col-md-6 tab-info">
							<h4>Lorem ipsum dolor sit amet</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium
								dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet fusce eget erat nunc. Sed fringilla sem vitae
								mi interdum commodo.</p>

						</div>
						<div class="col-md-6 tab-info-img">
							<img src="images/g2.jpg" alt="img">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>



				<div class="clearfix"> </div>
			</div>
		</div><br>

