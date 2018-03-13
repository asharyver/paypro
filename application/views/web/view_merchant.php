
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
<div class="row" style="padding: 0 7%">
	<div class="agile_wthree_inner_grids">
		<div class="col-md-4 col-sm-4" style="padding: 30px 20px 30px 1px">
			<div class="form-group" id="select_cat">
				<select class="selectpicker form-control" id="select_category">
					<option value="">Semua Kategori</option>
					<?php foreach ($category as $cat):?>
						<option value="<?php echo $cat;?>"><?php echo $cat;?></option>
					<?php endforeach;?>
				</select>
			</div>
		</div>
		
		<div class="col-md-4 col-sm-4" style="padding: 30px 35px 30px 1px">
			<div class="form-group">
				<select name="combo" class="form-control selectpicker" id="select_location">
					<option value="">Semua Lokasi</option>
					<?php foreach ($location as $loc):?>
						<option value="<?php echo $loc;?>"><?php echo $loc;?></option>
					<?php endforeach;?>
				</select>
			</div>
		</div>
		<div class="col-md-4 col-sm-4" style="padding: 30px 40px 30px 1px">
			<div class="form-group">
				<input class="form-control" placeholder="Cari" id="search_autocomplete">
			</div>
		</div>
		<script>
			var category = '';
			var lokasi = '';
			var search = '';
			var offset = <?php echo count($merchant);?>; // Jumlah data yang telah diload
			var ended = false; // apakah sudah mencapai batas ??
		</script>
		<div class="col-md-12 col-sm-12 row" id="load_container">
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
			    		url: '<?php echo base_url('merchants/load_ajax');?>', // URL Request
			    		type: 'POST',
			    		dataType: 'HTML',
			    		data: {offset: offset, category: category,location: lokasi, name: search}, // Jangan lupa untuk mengirimkan offset (data yang telah diload)
			    		success: function(res) {
			    			offset += 4; // Jangan lupa untuk menambahkan offset (jumlah data yang telah diload)
			    			var onXHRReq = false;
			    			$('#load_container').append(res);
			    			$('.loading').hide();
			    		}
			    	});
			    }
		    }
		});
	});
		jQuery(document).ready(function($) {
		$('#select_category').change(function(event) {
			category = $(this).val();
			
			$.ajax({
				url: '<?php echo base_url('Merchants/reload_category_ajax');?>',
				type: 'POST',
				data: {category: category, location: lokasi, name: search},
				success: function(res) {
					$('#load_container').html(res);
				}
			});
		});
		
		$('#select_location').change(function(event) {
			lokasi = $(this).val();

			$.ajax({
				url: '<?php echo base_url('Merchants/reload_location_ajax');?>',
				type: 'POST',
				data: {category: category,location: lokasi, name: search},
				success: function(res) {
					$('#load_container').html(res);
				}
			});
			
		});

		$('#search_autocomplete').autocomplete({
			serviceUrl: '<?php echo base_url('merchants/get_name_ajax');?>',
			params: {
				category: category,
				location: lokasi
			},
			onSelect: function (res) {
				search = res.name;
				$.ajax({
					url: '<?php echo base_url('Merchants/reload_name_ajax');?>',
					type: 'POST',
					data: {category: category,location: lokasi, name: search},
					success: function(res) {
						$('#load_container').html(res);
					}
				});
			}
		});
	});
</script>
