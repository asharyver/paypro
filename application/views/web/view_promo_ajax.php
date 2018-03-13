<?php foreach ($promo as $row) { ?>
<div class="col-md-4 col-sm-4 promo">
	<a href="<?=site_url('Promos/detail/'. $row->id_promo); ?>">
	<img class="img-promo" src="<?=base_url('./siminta/assets/promo/'. $row->gambar); ?>"></a>
	<a href="<?=site_url('Promos/detail/'. $row->id_promo); ?>"><h4 class="hrf-std"><strong> <?=$row->nama; ?></strong></h4></a><br>
	<a href="<?=site_url('Promos/detail/'. $row->id_promo); ?>"><h3 class="ori"><strong><?=$row->ket; ?></strong></h3></a><br>
	<p><?=$row->periode; ?></p>
</div>
<?php } ?>
<?php if (empty($promo)) {?>
	<script>
		var ended = true;
	</script>
<?php }?>
<div class="clearfix"></div>
