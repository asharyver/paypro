<?php foreach ($merchant as $row) { ?>
				<div class="col-md-3 col-sm-3 merchant">
					<img class="img-merchant" src="<?=base_url('./siminta/assets/merchant/'. $row->gambar); ?>">
					<h3 class="hrf-std"><strong><?=$row->nama; ?></strong></h3><br>
					<h4><img src="<?=base_url('web/images/map.png'); ?>">&nbsp;&nbsp;<?=$row->lokasi; ?></h4><br>
					<p><?=$row->kategori; ?></p>
				</div>
			<?php } ?>
<?php if (count($merchant) == 4): // Apakah jumlah data merchants sesuai limit ? ?>
	<div class="clearfix"></div>
<?php endif;?>
