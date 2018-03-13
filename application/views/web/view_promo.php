<div class="banner-bottom service_agile">
	<div class="col-md-6 col-sm-6" style="padding: 0px 50px 0px 200px">
		<img src="<?=base_url('web/images/head_promo.png'); ?>" class="img-responsive"  />
	</div>
	<div class="col-md-6 col-sm-6 ctn_saldo" >
		<h2 class="hrf-putih"><strong>Promo</strong></h2><br>
		<p class="hrf-putih">Berbagai penawaran dari partner kami, beragam discount atau<br> cashback yang kami tawakan.
		temukan semuannya dengan Paypro<br> Gampang pakenya, banyak untungnya! </p><br>
	</div>
	<div class="clearfix"> </div>
</div>
<div class="row" style="padding: 0 7%">
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
		<div class="col-md-12 col-sm-12 row" id="load_container">
			<script>
				var offset = <?php echo count($promo);?>; // Data yang telah diload
				var ended = false; // Apakah sudah mencapai akhir ?
			</script>
			<?php foreach ($promo as $row) { ?>
			<div class="col-md-4 col-sm-4 promo">
				<a href="<?=site_url('Promos/detail/'. $row->id_promo); ?>">
				<img class="img-promo" src="<?=base_url('./siminta/assets/promo/'. $row->gambar); ?>"></a>
				<a href="<?=site_url('Promos/detail/'. $row->id_promo); ?>"><h4 class="hrf-std"><strong> <?=$row->nama; ?></strong></h4></a><br>
				<a href="<?=site_url('Promos/detail/'. $row->id_promo); ?>"><h3 class="ori"><strong><?=$row->ket; ?></strong></h3></a><br>
				<p><?=$row->periode; ?></p>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="loading">
		<img src="<?php echo base_url('assets/img/35.gif');?>" alt="Preloader ..." />
		<!-- <i class="fa fa-spinner fa-5x fa-spin"></i> -->
	</div>
</div><br>
<script>
	$(document).ready(function($){
		var onXHRReq = false; // Mengatasi Double Request
		$(window).scroll(function() {
		    var scrolled = Math.abs($(document).scrollTop() - ($(document).height() - $(this).height())) - $('.footer').height();
		    if (scrolled < 20 && ! onXHRReq) { // Bila telah di-scroll kurang dari 20 dari bawah footer dan tidak sedang melakukan request XHR
		    	
		    	if (typeof ended !== undefined && ended == false) { // Berhenti apabila data telah sampai akhir data
			    	$('.loading').show();
			    	onXHRReq = true;
			    	$.ajax({
			    		url: '<?php echo base_url('promos/load_ajax');?>', // URL Request
			    		type: 'POST',
			    		dataType: 'HTML',
			    		data: {offset: offset}, // Jangan lupa untuk mengirimkan offset (data yang telah diload)
			    		success: function(res) {
			    			offset += 3; // Jangan lupa untuk menambahkan offset (jumlah data yang telah diload)
			    			var onXHRReq = false;
			    			$('#load_container').append(res);
			    			$('.loading').hide();
			    		}
			    	});
			    }
		    }
		});
	});
</script>
