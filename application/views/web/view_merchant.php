
<div class="banner-bottom service_agile">
	<div class="col-md-6 col-sm-6 head-merchant">
		<img src="<?=base_url('web/images/head_promo.png'); ?>" class="img-responsive"  />
	</div>
	<div class="col-md-6 col-sm-6 ctn_saldo" >
		<h2 class="hrf-putih"><strong>Merchants</strong></h2><br>
		<p class="hrf-putih">Gunakan Paypro untuk pembayaran di lebih 4000 di merchant kami,<br> Rasakan kemudahan dan penawarannya </p><br>
	</div>
	<div class="clearfix"> </div>
</div>
<div class="row" style="padding: 20px 30px">
	<div class="agile_wthree_inner_grids">
		<div class="col-md-4 col-sm-4" style="padding: 30px 20px 30px 1px">
			<div class="form-group">
				<select class="selectpicker form-control">
					<option value=""> Semua Kategori</option>
					<option value="Makanan">Makanan</option>
				</select>
			</div>
		</div>
		<div class="col-md-4 col-sm-4" style="padding: 30px 35px 30px 1px">
			<div class="form-group">
				<select name="combo" class="form-control selectpicker">
					<option value="">Semua Lokasi</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
				</select>
			</div>
		</div>
		<div class="col-md-4 col-sm-4" style="padding: 30px 40px 30px 1px">
			<div class="form-group">
				<input class="form-control" placeholder="Cari">
			</div>
		</div>
		<div class="col-md-12 col-sm-12 row">
			<?php foreach ($merchant as $row) { ?>
				<div class="col-md-3 col-sm-3 merchant">
					<img class="img-merchant" src="<?=base_url('./siminta/assets/merchant/'. $row->gambar); ?>">
					<h3 class="hrf-std"><strong><?=$row->nama; ?></strong></h3><br>
					<h4><img src="<?=base_url('web/images/map.png'); ?>">&nbsp;&nbsp;<?=$row->lokasi; ?></h4><br>
					<p><?=$row->kategori; ?></p>
				</div>
			<?php } ?>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div><br>


