<ul class="nav navbar-nav">
	<?php if (empty($pageType) or $pageType !== 'karir'): ?>
	<li><a href="<?=site_url('Abouts'); ?>" class="effect-3"><?php _t('About Paypro')?></a></li>
	<li><a href="<?=site_url('Hows'); ?>" class="effect-3"><?php _t('How It Works');?></a></li>
	<li><a href="<?=site_url('Promos'); ?>" class="effect-3"><?php _t('Promo')?></a></li>
	<li><a href="<?=site_url('Merchants'); ?>" class="effect-3"><?php _t('Merchant');?></a></li>
	<li><a href="<?=site_url('Contacts'); ?>" class="effect-3"><?php _t('Contact Us');?></a></li>
	<?php endif;?>
	<li class="language-btn dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url('web/images/id.png');?>" /> <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li class="dropdown-item"><a href="<?php echo base_url('language/change/ID?ref='. base64_encode(current_url()));?>"><img src="<?=base_url('web/images/id.png');?>" /> Indonesian</a></li>
			<li class="dropdown-item"><a href="<?php echo base_url('language/change/EN?ref='. base64_encode(current_url()));?>"><img src="<?=base_url('web/images/eng.png');?>" /> English</a></li>
		</ul>
	</li>
	<li class="download-paypro dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _t('Download PayPro')?></a>
		<ul class="dropdown-menu">
			<li class="dropdown-item"><a href="">Play Store</a></li>
			<li class="dropdown-item"><a href="">App Store</a></li>
		</ul>
	</li>
</ul>
