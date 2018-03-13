<!-- js -->
<!-- //js -->
<script src="<?=base_url(); ?>web/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo base_url('assets/js/jquery.autocomplete.js')?>"></script>
<!-- //nav -->
<script type="text/javascript" src="<?=base_url(); ?>web/js/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>web/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>web/js/jquery.form-validator.min.js"></script>
<script src="<?=base_url(); ?>web/js/easy-responsive-tabs.js"></script>
<!--script src="<?=base_url(); ?>web/js/owl.carousel.js"></script-->
<script>
	jQuery(document).ready(function ($) {
		$('.carousel').carousel();

        // $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
       // $('[id^=carousel-selector-]').click( function(){
       //      var id = this.id.substr(this.id.lastIndexOf("-") + 1);
       //      var id = parseInt(id);
       //      $('#myCarousel').carousel(id);
       //  });


        // When the carousel slides, auto update the text
        // $('#myCarousel').on('slid.bs.carousel', function (e) {
        //          var id = $('.item.active').data('slide-number');
        //         $('#carousel-text').html($('#slide-content-'+id).html());
        // });
		//$('#carousel-text').html($('#slide-content-0').html());

		/*var id = 0;
		$('#carousel-text').html($('#slide-content-' + id).html());
		$('[id^=carousel-selector-]').click( function(){
			id = this.id.substring(this.id.lastIndexOf('-'));
			id = parseInt(id.replace('-',''));
			$('#myCarousel').carousel(id);
		}); */
		/*

		// When the carousel slides, auto update the text
		$('#myCarousel').on('slid', function (e) {
			var id = $('.item.active').data('slide-number');
			$('#carousel-text').html($('#slide-content-'+id).html());
		}); */

		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any custom width
			fit: true,   // 100% fits in a container
			closed: false, // Close the panels on start, the options 'accordion' and 'tabs' keep them closed in there respective view types
			activate: function() {}  // Callback function, gets called if tab is switched
		});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>

<script type="text/javascript">
	$.validate({
		modules : 'file, date',
		form: '#form',

		validateOnBlur: true,
		showHelpOnFocus: true,
		addSuggestions: true,
		onSuccess: function($form) {
			console.log("success")
			return true;
		},
		onError: function() {
			console.log("Error")
		}
	});
</script>
