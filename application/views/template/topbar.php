<?php if( ! empty($pageType) && $pageType == 'blogs'):?>
<ul class="nav navbar-nav blog-category">
	<li><a href="<?php echo base_url();?>">Home</a></li>
	<?php foreach ($category as $c):?>
		<?php if (empty($c['parent'])):?>
			<li><a href="<?php echo base_url('blogs/category/'.$c['link']);?>"><?php echo $c['name'];?></a></li>
		<?php else:?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $c['name'];?> <i class="fa fa-chevron-down"></i></a>
				<ul class="dropdown-menu">
					<?php foreach ($c['parent'] as $p):?>
						<li><a href="<?php echo base_url('blogs/category/'.$p['link']);?>"><?php echo $p['name'];?></a></li>
					<?php endforeach;?>
				</ul>
			</li>
		<?php endif;?>
	<?php endforeach;?>
</ul>
<?php else:?>
<ul class="nav navbar-nav">
	<?php if (empty($pageType) or $pageType !== 'karir'): ?>
	<li<?php echo $navbar_page == 'Abouts' ? ' class="active"' : ''?>><a href="<?=site_url('Abouts'); ?>" class="effect-3"><?php _t('About PayPro')?></a></li>
	<li<?php echo $navbar_page == 'Hows' ? ' class="active"' : ''?>><a href="<?=site_url('Hows'); ?>" class="effect-3"><?php _t('How It Works');?></a></li>
	<li<?php echo $navbar_page == 'Promos' ? ' class="active"' : ''?>><a href="<?=site_url('Promos'); ?>" class="effect-3"><?php _t('Promo')?></a></li>
	<li<?php echo $navbar_page == 'Merchants' ? ' class="active"' : ''?>><a href="<?=site_url('Merchants'); ?>" class="effect-3"><?php _t('Merchant');?></a></li>
	<li<?php echo $navbar_page == 'Contacts' ? ' class="active"' : ''?>><a href="<?=site_url('Contacts'); ?>" class="effect-3"><?php _t('Contact Us');?></a></li>
	<?php endif;?>
	<li class="language-btn dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url('web/images/'. ((strtolower(get_cookie('LANG')) == 'id') ? 'id' : 'eng') .'.png');?>" /> <span class="caret"></span></a>
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
<?php endif;?>
