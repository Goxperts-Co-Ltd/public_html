<?php
	
	function _add_pillar_stylesheets()
	{
		wp_enqueue_style('p-onlinefont-min-css', 'https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap', array(), null, 'all' );
		wp_enqueue_style('p-bootstrap-min-css', get_template_directory_uri() . '/assets/pillar/fonts/icomoon/style.css', array(), null, 'all' );	
		wp_enqueue_style('p-fontawesome-css', get_template_directory_uri() .'/assets/pillar/css/bootstrap.min.css', array(), null,'all'); 
		wp_enqueue_style('p-main-css', get_template_directory_uri() . '/assets/pillar/css/jquery-ui.css', array(), null, 'all' );
  		wp_enqueue_style('p-mobirise-css', get_template_directory_uri() . '/assets/pillar/css/owl.carousel.min.css', array(), null, 'all' );
  		wp_enqueue_style('p-tether-css', get_template_directory_uri() . '/assets/pillar/css/owl.theme.default.min.css', array(), null, 'all' );
  		wp_enqueue_style('p-bootstrap-css', get_template_directory_uri() . '/assets/pillar/css/owl.theme.default.min.css', array(), null, 'all' );
  		wp_enqueue_style('p-bootstrap-grid', get_template_directory_uri() . '/assets/pillar/css/jquery.fancybox.min.css', array(), null, 'all' );
  		wp_enqueue_style('p-bootstrap-reboot', get_template_directory_uri() . '/assets/pillar/css/bootstrap-datepicker.css', array(), null, 'all' );
  		wp_enqueue_style('p-bootstrap-dropdown', get_template_directory_uri() . '/assets/pillar/fonts/flaticon/font/flaticon.css', array(), null, 'all' );
  		wp_enqueue_style('p-bootstrap-socicon', get_template_directory_uri() . '/assets/pillar/css/aos.css', array(), null, 'all' );
  		wp_enqueue_style('p-bootstrap-theme', get_template_directory_uri() . '/assets/pillar/css/jquery.mb.YTPlayer.min.css', array(), null, 'all' );
  	//	wp_enqueue_style('mbr-theme', get_template_directory_uri() . '/assets/pillar/', array(), null, 'all' );
  		wp_enqueue_style('p-override-style', get_template_directory_uri() . '/assets/pillar/css/style.css', array(), null, 'all' );
	}
	add_action('wp_enqueue_scripts', '_add_pillar_stylesheets');

	function _add_pillar_javascript()
	{
		
  
		//   wp_enqueue_script('p-jquery-assets', get_template_directory_uri() . '/assets/pillar/js/jquery-3.3.1.min.js', array(), null, true );
		//   wp_enqueue_script('p-popper-js', get_template_directory_uri() . '/assets/pillar/js/jquery-migrate-3.0.1.min.js', array(), null, true );
		//   wp_enqueue_script('p-tether-js', get_template_directory_uri() . '/assets/pillar/js/jquery-ui.js', array(), null, true );
		//   wp_enqueue_script('p-bootstrap-js', get_template_directory_uri() . '/assets/pillar/js/popper.min.js', array(), null, true );
		//   wp_enqueue_script('p-smoothdcrool-js', get_template_directory_uri() . '/assets/pillar/js/bootstrap.min.js', array(), null, true );
		//   wp_enqueue_script('p-dropdown-js', get_template_directory_uri() . '/assets/pillar/js/owl.carousel.min.js', array(), null, true );
		//   wp_enqueue_script('p-touch-swipe-js', get_template_directory_uri() . '/assets/pillar/js/jquery.stellar.min.js', array(), null, true );
		//   wp_enqueue_script('p-vimeo-js', get_template_directory_uri() . '/assets/pillar/js/jquery.countdown.min.js', array(), null, true );
		//   wp_enqueue_script('p-mbr-clients-js', get_template_directory_uri() . '/assets/pillar/js/bootstrap-datepicker.min.js', array(), null, true );
		//   wp_enqueue_script('p-mbr-tabs-js', get_template_directory_uri() . '/assets/pillar/js/jquery.easing.1.3.js', array(), null, true );
		//   wp_enqueue_script('p-mbr-switch-js', get_template_directory_uri() . '/assets/pillar/js/aos.js', array(), null, true );
		//   wp_enqueue_script('p-mbr-parralax-js', get_template_directory_uri() . '/assets/pillar/js/jquery.fancybox.min.js', array(), null, true );
		//   wp_enqueue_script('p-mbr-social-js', get_template_directory_uri() . '/assets/pillar/js/jquery.sticky.js', array(), null, true );
		// //  wp_enqueue_script('p-mbr-courosel-js', get_template_directory_uri() . '/assets/pillar/js/jquery.mb.YTPlayer.min.js', array(), null, true );
		   wp_enqueue_script('p-mbr-script-js', get_template_directory_uri() . '/assets/pillar/js/main.js', array(), null, true );
		

	}
	add_action('wp_enqueue_scripts', '_add_pillar_javascript', 100);

