<?php
	
	function _add_stylesheets()
	{
		wp_enqueue_style('onlinefont-min-css', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap', array(), null, 'all' );
		wp_enqueue_style('bootstrap-min-css', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.min.css', array(), null, 'all' );	
		wp_enqueue_style('fontawesome-css', get_template_directory_uri() .'/assets/css/animate.css', array(), null,'all'); 
		wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), null, 'all' );
  		wp_enqueue_style('mobirise-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), null, 'all' );
  		wp_enqueue_style('tether-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), null, 'all' );
  		wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/aos.css', array(), null, 'all' );
  		wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/ionicons.min.css', array(), null, 'all' );
  		wp_enqueue_style('bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css', array(), null, 'all' );
  		wp_enqueue_style('bootstrap-dropdown', get_template_directory_uri() . '/assets/css/jquery.timepicker.css', array(), null, 'all' );
  		wp_enqueue_style('bootstrap-socicon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), null, 'all' );
  		wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/assets/css/icomoon.css', array(), null, 'all' );
  		wp_enqueue_style('mbr-theme', get_template_directory_uri() . '/assets/css/style.css', array(), null, 'all' );
  		wp_enqueue_style('override-style', get_template_directory_uri() . '/style.css', array(), null, 'all' );
	}
	add_action('wp_enqueue_scripts', '_add_stylesheets');

	function _add_javascript()
	{
		
  
		  wp_enqueue_script('jquery-assets', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true );
		  wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array(), null, true );
		  wp_enqueue_script('tether-js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), null, true );
		  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets//js/bootstrap.min.js', array(), null, true );
		  wp_enqueue_script('smoothdcrool-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), null, true );
		  wp_enqueue_script('dropdown-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), null, true );
		  wp_enqueue_script('touch-swipe-js', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array(), null, true );
		  wp_enqueue_script('vimeo-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null, true );
		  wp_enqueue_script('mbr-clients-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), null, true );
		  wp_enqueue_script('mbr-tabs-js', get_template_directory_uri() . '/assets/js/aos.js', array(), null, true );
		  wp_enqueue_script('mbr-switch-js', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array(), null, true );
		  wp_enqueue_script('mbr-parralax-js', get_template_directory_uri() . '/assets/js/scrollax.min.js', array(), null, true );
		  wp_enqueue_script('mbr-social-js', get_template_directory_uri() . 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array(), null, true );
		  wp_enqueue_script('mbr-courosel-js', get_template_directory_uri() . '/assets/js/google-map.js', array(), null, true );
		  wp_enqueue_script('mbr-script-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
		

	}
	add_action('wp_enqueue_scripts', '_add_javascript', 100);

