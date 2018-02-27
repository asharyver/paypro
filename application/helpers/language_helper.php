<?php 

if ( ! function_exists('_t')) {
	function _t($format, ...$args) {
		$lang = get_cookie('LANG', true);
		
		$obj = get_instance()->lang;
		
		if ($lang == 'ID') {
			$obj->load('site_lang', 'indonesian');
		} else {
			if (strpos($format, '%') !== false Or ! empty($args)) {
				echo sprintf($format, ...$args);
				return '';
			}

			echo $format;
			return '';
		}
		
		if (strpos($format, '%') !== false Or ! empty($args)) {
			echo sprintf($obj->line($format), ...$args);
			return '';
		}
		echo $obj->line($format);
		return '';
	}
}
